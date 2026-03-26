<?php

namespace App\Modules\Customer\Repositories;

use App\Modules\Customer\Models\CustomerBankDetail;
//use App\Exceptions\BaseException;
//use App\Modules\Base\Repositories\BaseRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;

class CustomerBankRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new CustomerBankDetail();
    }

    public function getCustomerBankList(){
        try{
            return $this->model->orderby('id', 'ASC')->get();
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function createCustomerBank(array $arr){
        try {
            return CustomerBankDetail::insert($arr);
        } catch (\Exception $e) {
            dd($e);
            throw $e->getMessage();
        }
    }

    public function findCustomerBankById(int $id)
    {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return false;
        }
    }

    public function updateCustomerBank($data, int $id)
    {
        try {
            
        } catch (QueryException $e) {
            return new EventEditErrorException();
        }
    }

    public function addCustomerAccount(array $data){
        try {
            return $this->model->create($data);
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }

    public function removeCustomerAccount($id){
        try {
            return $this->model->where('id', $id)->delete();
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }
}