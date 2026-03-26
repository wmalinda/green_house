<?php
namespace App\Modules\Customer\Services;

use App\Modules\Customer\Repositories\CustomerRepository;
// use App\Modules\Base\Services\BaseService;
use App\Exceptions\BaseException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\BadResponseException;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerService
{
    protected $customerRepo = null;

    public function __construct(){
        // parent::__construct();
         $this->customerRepo = new CustomerRepository();
    }

    public function getCustomerList(){
        try{
            return $this->customerRepo->getCustomerList();
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function getEnabledCustomerList(){
        try{
            return $this->customerRepo->getEnabledCustomerList();
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function createCustomer(CustomerCreateRequest $request){
        try{
            $data = $request->request->all();
            $customer['name'] = $data['name'];
            $customer['code'] = (isset($data['code'])) ? $data['code'] : '';
            $customer['address'] = (isset($data['address'])) ? $data['address'] : '';
            $customer['brc_no'] = (isset($data['brc_no'])) ? $data['brc_no'] : '';
            $customer['contact'] = (isset($data['contact'])) ? $data['contact'] : '';
            $customer['mobile'] = (isset($data['mobile'])) ? $data['mobile'] : '';
            $customer['fax'] = (isset($data['fax'])) ? $data['fax'] : '';
            $customer['email'] = (isset($data['email'])) ? $data['email'] : NULL;
            $customer['web'] = (isset($data['web'])) ? $data['web'] : '';
            $customer['category_id'] = (isset($data['category'])) ? $data['category'] : '';
            $customer['credit_period'] = (isset($data['credit_period'])) ? $data['credit_period'] : 0;
            $customer['credit_limit'] = (isset($data['credit_limit'])) ? $data['credit_limit'] : 0.00;
            $customer['status'] = (isset($data['status'])) ? 1 : 0;
            $createCustomer = $this->customerRepo->createCustomer($customer);

            if($createCustomer){
                if($request->file('logo')){
                    $logo = $request->file('logo');
                    $fileName = $createCustomer['id'] . '_' . md5(Carbon::now()->toDateTimeString()) . '.' . $logo->extension();
                    $cu_path = '/upload/customer/logo';
                    $file = $request->logo->move(public_path($cu_path), $fileName);
                    if($file){
                        $update_customer['logo'] = $cu_path . '/'. $fileName;
                    }
                }

                $location['customer_id'] = $createCustomer['id'];
                $location['location_id'] = $data['location'];
                $location['start_date'] = date('Y-m-d');
                $location['status'] = 1;
                $createCustomerLocation = $this->customerRepo->createCustomerLocation($location);

                $account_receivable = config('constants.account_receivable');
                $code = $account_receivable['code'];
                $getAccountListByParentId = $this->accountRepo->getAccountListByParentId($account_receivable['parent_id']);
                if(count($getAccountListByParentId) > 0){
                    $accArr = [];
                    foreach($getAccountListByParentId as $accList){
                        $accArr[] = (int)$accList->code;
                    }
        
                    $max = max($accArr);
                }else{
                    $max = (int)$code;
                }
    
                $account['code'] = ++$max;
                $account['parent_id'] = $account_receivable['parent_id'];
                $account['level'] = ++$account_receivable['level'];
                $account['name'] = $data['name'];
                $account['description'] = $data['name'] . " Receivable Account";
                $account['status'] = 1;
                $account['created_by'] = Auth::id();
                $account['created_date'] = date('Y-m-d');
                $createAccount = $this->accountRepo->createAccount($account);

                $update_customer['chart_of_account_id'] = $createAccount['id'];
                $updateCustomer = $this->customerRepo->updateCustomer($update_customer, $createCustomer['id']);

                if(isset($data['bank']) && $data['bank'][1] != null){
                    $bankDetail = [];
                    foreach($data['bank'] as $key => $bankData){
                        $bankDetail[$key]['customer_id'] = $createCustomer['id'];
                        $bankDetail[$key]['bank'] = $bankData;
                    }
    
                    foreach($data['branch'] as $key => $branchData){
                        $bankDetail[$key]['branch'] = $branchData;
                    }
    
                    foreach($data['account_name'] as $key => $account_name){
                        $bankDetail[$key]['account_name'] = $account_name;
                    }
    
                    foreach($data['account_no'] as $key => $account_no){
                        $bankDetail[$key]['account_no'] = $account_no;
                    }
    
                    $createCustomerBank = $this->customerBankRepo->createCustomerBank($bankDetail);
                }
                
                if(isset($data['ref_name']) && $data['ref_name'][1] != null){
                    foreach($data['ref_name'] as $key => $ref_name){
                        $contactDetail[$key]['customer_id'] = $createCustomer['id'];
                        $contactDetail[$key]['name'] = $ref_name;
                    }
    
                    foreach($data['designation'] as $key => $designation){
                        $contactDetail[$key]['designation'] = $designation;
                    }
    
                    foreach($data['ref_contact'] as $key => $ref_contact){
                        $contactDetail[$key]['contact'] = $ref_contact;
                    }
    
                    foreach($data['con_email'] as $key => $con_email){
                        $contactDetail[$key]['email'] = $con_email;
                    }

                    $createCustomerContact = $this->customerContactRepo->createCustomerContact($contactDetail);
                }
                
                return $createCustomer;
            }

            return false;
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function findCustomerById($id){
        try{
            return $this->customerRepo->findCustomerById($id);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function updateCustomer(CustomerUpdateRequest $request, $id){
        try{
            $data = $request->request->all();

            if($request->file('logo')){
                $logo = $request->file('logo');
                $fileName = $id . '_' . md5(Carbon::now()->toDateTimeString()) . '.' . $logo->extension();
                $cu_path = '/upload/customer/logo';
                $file = $request->logo->move(public_path($cu_path), $fileName);
                if($file){
                    $customer['logo'] = $cu_path . '/'. $fileName;
                }
            }

            $customer['name'] = $data['name'];
            $customer['address'] = (isset($data['address'])) ? $data['address'] : '';
            $customer['brc_no'] = (isset($data['brc_no'])) ? $data['brc_no'] : '';
            $customer['contact'] = (isset($data['contact'])) ? $data['contact'] : '';
            $customer['mobile'] = (isset($data['mobile'])) ? $data['mobile'] : '';
            $customer['fax'] = (isset($data['fax'])) ? $data['fax'] : '';
            $customer['email'] = (isset($data['email'])) ? $data['email'] : '';
            $customer['web'] = (isset($data['web'])) ? $data['web'] : '';
            $customer['category_id'] = (isset($data['category'])) ? $data['category'] : '';
            $customer['credit_period'] = (isset($data['credit_period'])) ? $data['credit_period'] : '';
            $customer['credit_limit'] = (isset($data['credit_limit'])) ? $data['credit_limit'] : '';
            $customer['status'] = (isset($data['status'])) ? 1 : 0;
            return $this->customerRepo->updateCustomer($customer, $id);            
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function getCustomerDetailsWithCategorieBankAndContactByCustomerId($id){
        try{
            return $this->customerRepo->getCustomerDetailsWithCategorieBankAndContactByCustomerId($id);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function addCustomerContact(Request $request, $id){
        try{
            $data = $request->request->all();
            $contact['customer_id'] = $id;
            $contact['name'] = (isset($data['ref_name'])) ? $data['ref_name'] : '';
            $contact['designation'] = (isset($data['designation'])) ? $data['designation'] : '';
            $contact['contact'] = (isset($data['ref_contact'])) ? $data['ref_contact'] : '';
            $contact['email'] = (isset($data['con_email'])) ? $data['con_email'] : '';
            return $this->customerContactRepo->addCustomerContact($contact);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function removeCustomerContact($id){
        try{
            return $this->customerContactRepo->removeCustomerContact($id);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function addCustomerAccount(Request $request, $id){
        try{
            $data = $request->request->all();
            $account['customer_id'] = $id;
            $account['bank'] = (isset($data['bank'])) ? $data['bank'] : '';
            $account['branch'] = (isset($data['branch'])) ? $data['branch'] : '';
            $account['account_name'] = (isset($data['account_name'])) ? $data['account_name'] : '';
            $account['account_no'] = (isset($data['account_no'])) ? $data['account_no'] : '';
            return $this->customerBankRepo->addCustomerAccount($account);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function removeCustomerAccount($id){
        try{
            return $this->customerBankRepo->removeCustomerAccount($id);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function getCustomerListByLocationId(Request $request){
        try{
            return $this->customerRepo->getCustomerListByLocationId($request->location_id);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function statusUpdate(Request $request){
        try{
            $data = $request->request->all();
            $customerUpdate['status'] = $data['status'];
            return $this->customerRepo->updateCustomer($customerUpdate, $data['id']);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function checkCustomerEmailExsist(Request $request){
        try{
            $checkCustomerEmailExsist = $this->customerRepo->checkCustomerEmailExsist($request->email);
            if($checkCustomerEmailExsist){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            throw $e;
        }
    }
}