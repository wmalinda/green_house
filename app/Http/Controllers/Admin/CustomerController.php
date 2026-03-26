<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Customer\Services\CustomerService;
// use App\Modules\Customer\Models\Customer;
// use App\Modules\Customer\Requests\CustomerCreateRequest;
// use App\Modules\Customer\Requests\CustomerUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CustomerController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->customerService = new CustomerService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //dd('sdsd');
        $data['slug'] = 'list-customer';
        $data['title'] = 'Manage Customer';
        $data['sub_page'] = 'List Customer';
        $data['page_title'] = 'Customer Details';
        return view('admin.customer.index', $data);
    }

    public function data(DataTables $datatables)
    {
        $query = Customer::select('customers.id', 'customers.code', 'customers.name', 'customers.contact', 'customers.mobile', 'customers.email', 'customers.status', 'customer_categories.name as customer_category')
            ->leftJoin('customer_categories', 'customers.category_id', '=', 'customer_categories.id')    
            ->orderby('customers.id', 'asc');

        return $datatables->eloquent($query)
            ->addColumn('action', function (Customer $customer) {
                $viewURl = url('/customer/' . $customer->id . '/show');
                return    '&nbsp;<a href="' . $viewURl . '" class="btn btn-sm btn-success '  . '">View/Edit </a>';
            })

            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category_list'] = $this->customerCategorieService->getCustomerCategorieList();
        $data['locationList'] = $this->locationService->getEnabledLocationList();
        $data['slug'] = 'create-customer';
        $data['title'] = 'Manage Customer';
        $data['sub_page'] = 'Create Customer';
        $data['page_title'] = 'Customer Details';
        return view('admin.customer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerCreateRequest $request)
    {
        $createCustomer = $this->customerService->createCustomer($request);
        if($createCustomer != false){
            return redirect('/customer/list')->with('success', '"'.$createCustomer->name.'"'.' successfully created');
        }else{
            return redirect('/customer/list')->with('Error', 'Customer creating fail.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $getCustomerAllDetails = $this->customerService->getCustomerDetailsWithCategorieBankAndContactByCustomerId($id);
            if($getCustomerAllDetails){
                $data['category_list'] = $this->customerCategorieService->getCustomerCategorieList();
                $data['slug'] = 'show-customer';
                $data['title'] = 'Manage Customer';
                $data['sub_page'] = 'Show Customer';
                $data['page_title'] = 'Customer Details';
                $data['getCustomerAllDetails'] = $getCustomerAllDetails;
                return view('admin.customer.view', $data);
            }

            abort(404);
        }catch(\Exception $e){
            throw $e;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $getCustomerAllDetails = $this->customerService->getCustomerDetailsWithCategorieBankAndContactByCustomerId($id);
            if($getCustomerAllDetails){
                $data['getSupplierAllDetails'] = $getCustomerAllDetails;
                $data['slug'] = 'edit-customer';
                $data['title'] = 'Manage Customer';
                $data['sub_page'] = 'Edit Customer';
                $data['page_title'] = 'Customer Details';
                return view('admin.customer.edit', $data);
            }

            abort(404);
        }catch(\Exception $e){
            throw $e;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerUpdateRequest $request, $id)
    {
        $updateCustomer = $this->customerService->updateCustomer($request, $id);
        if($updateCustomer != false){
            return redirect('/customer/'.$id.'/show')->with('success', '"'.$updateCustomer->name.'"'.' successfully updated');
        }else{
            return redirect('/customer/'.$id.'/show')->with('Error', 'Customer updating fail.');
        }
    }

    public function addCustomerContact(Request $request, $id)
    {
        $addCustomerContact = $this->customerService->addCustomerContact($request, $id);
        if($addCustomerContact != false){
            return redirect('/customer/'.$id.'/show')->with('success', 'Customer contact details successfully added.');
        }else{
            return redirect('/customer/'.$id.'/show')->with('Error', 'Customer contact details adding fail.');
        }
    }

    public function removeCustomerContact($cid, $id)
    {
        $removeCustomerContact = $this->customerService->removeCustomerContact($id);
        if($removeCustomerContact != false){
            return redirect('/customer/'.$cid.'/show')->with('success', 'Customer contact details successfully removed.');
        }else{
            return redirect('/customer/'.$cid.'/show')->with('Error', 'Customer contact details removing fail.');
        }
    }

    public function addCustomerAccount(Request $request, $id)
    {
        $addCustomerAccount = $this->customerService->addCustomerAccount($request, $id);
        if($addCustomerAccount != false){
            return redirect('/customer/'.$id.'/show')->with('success', 'Customer account information successfully added.');
        }else{
            return redirect('/customer/'.$id.'/show')->with('Error', 'Customer account information adding fail.');
        }
    }

    public function removeCustomerAccount($cid, $id)
    {
        $removeCustomerAccount = $this->customerService->removeCustomerAccount($id);
        if($removeCustomerAccount != false){
            return redirect('/customer/'.$cid.'/show')->with('success', 'Customer account information successfully removed.');
        }else{
            return redirect('/customer/'.$cid.'/show')->with('Error', 'Customer account information removing fail.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCustomerListByLocationId(Request $request)
    {
        try{
            return $this->customerService->getCustomerListByLocationId($request);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function statusUpdate(Request $request)
    {
        try{
            return $this->customerService->statusUpdate($request);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function checkCustomerEmailExsist(Request $request)
    {
        try{
            return $this->customerService->checkCustomerEmailExsist($request);
        }catch(\Exception $e){
            throw $e;
        }
    }
}
