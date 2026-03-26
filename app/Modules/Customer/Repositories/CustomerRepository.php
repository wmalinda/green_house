<?php

namespace App\Modules\Customer\Repositories;

use App\Modules\Customer\Models\Customer;
use App\Modules\Customer\Models\CustomerLocation;
//use App\Exceptions\BaseException;
//use App\Modules\Base\Repositories\BaseRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;

class CustomerRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Customer();
        $this->customerLocationModel = new CustomerLocation();
    }

    public function getCustomerList(){
        try{
            return $this->model->orderby('id', 'ASC')->get();
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function getEnabledCustomerList(){
        try{
            return $this->model->where('status', 1)->orderby('id', 'ASC')->get();
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function createCustomer(array $data){
        try {
            return $this->model->create($data);
        } catch (\Exception $e) {
            dd($e);
            throw $e->getMessage();
        }
    }

    public function findCustomerById(int $id)
    {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return false;
        }
    }

    public function updateCustomer($data, int $id)
    {
        try {
            $findSupplier = $this->findCustomerById($id);
            $findSupplier->update($data);
            return $findSupplier;
        } catch (QueryException $e) {
            return new EventEditErrorException();
        }
    }

    public function getCustomerDetailsWithCategorieBankAndContactByCustomerId($id){
        try{
            return $this->model->with(
                    'CustomerContactPersion',
                    'CustomerBankDetail', 
                    'CustomerBankDetail.Bank', 
                    'CustomerBankDetail.BankBranch',
                    'CustomerCategorie'
                )->find($id);
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function createCustomerLocation(array $data){
        try {
            return $this->customerLocationModel->create($data);
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }

    public function getCustomerListByLocationId($id){
        try{
            return $this->customerLocationModel->where('location_id', $id)->where('status', 1)->with('Customer')->get();
        }catch(\Exception $e){
            dd($e);
            throw $e;
        }
    }

    public function checkCustomerEmailExsist($email){
        try {
            return $this->model->where('email', $email)->first();
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }

    public function getCustomerListByIds($ids){
        try{
            return $this->model->whereIn('id', $ids)->get();
        }catch(\Exception $e){
            throw $e;
        }
    }
}