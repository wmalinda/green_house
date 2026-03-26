<?php

namespace App\Modules\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use Notifiable;

    protected $table = 'customers';

    protected $fillable = [
        'name', 
        'code',
        'address',
        'brc_no',
        'contact',
        'mobile',
        'fax',
        'email',
        'web',
        'category_id',
        'credit_period',
        'credit_limit',
        'logo',
        'status',
        'chart_of_account_id'
    ];

    public function CustomerContactPersion(){
    	return $this->hasMany('App\Modules\Customer\Models\CustomerContactPersion');
    }

    public function CustomerBankDetail(){
    	return $this->hasMany('App\Modules\Customer\Models\CustomerBankDetail');
    }

    public function CustomerCategorie(){
    	return $this->belongsTo('App\Modules\CustomerCategorie\Models\CustomerCategorie', 'category_id', 'id');
    }

    public function Invoice(){
    	return $this->hasMany('App\Modules\Invoice\Models\Invoice');
    }

    public function SalesReturn(){
    	return $this->hasMany('App\Modules\SalesReturn\Models\SalesReturn');
    }

    public function CreditBalance(){
    	return $this->hasMany('App\Modules\PaymentReceipt\Models\CreditBalance');
    }

    public function CustomerLocation(){
    	return $this->hasMany('App\Modules\Customer\Models\CustomerLocation');
    }
}
