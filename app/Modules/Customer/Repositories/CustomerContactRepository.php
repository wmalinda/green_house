<?php

namespace App\Modules\Customer\Repositories;

use App\Modules\Customer\Models\CustomerContactPersion;
//use App\Exceptions\BaseException;
//use App\Modules\Base\Repositories\BaseRepository;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;

class CustomerContactRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new CustomerContactPersion();
    }

    public function getCustomerContactList(){
        try{
            return $this->model->orderby('id', 'ASC')->get();
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function createCustomerContact(array $arr){
        try {
            return CustomerContactPersion::insert($arr);
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }

    public function findCustomerContactById(int $id)
    {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return false;
        }
    }

    public function updateCustomerContact($data, int $id)
    {
        try {
            
        } catch (QueryException $e) {
            return new EventEditErrorException();
        }
    }

    public function addCustomerContact(array $data){
        try {
            return $this->model->create($data);
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }

    public function removeCustomerContact($id){
        try {
            return $this->model->where('id', $id)->delete();
        } catch (\Exception $e) {
            throw $e->getMessage();
        }
    }
}