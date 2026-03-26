<?php

namespace App\Modules\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CustomerBankDetail extends Model
{
    use Notifiable;

    protected $table = 'customer_bank_details';

    protected $fillable = [
        'customer_id', 
        'bank',
        'branch',
        'account_name',
        'account_no'
    ];

    public function Customer(){
    	return $this->belongsTo('App\Modules\Customer\Models\Customer', 'customer_id', 'id');
    }

    public function Bank(){
    	return $this->hasMany('App\Modules\Bank\Models\Bank', 'id', 'bank');
    }

    public function BankBranch(){
    	return $this->hasMany('App\Modules\BankBranch\Models\BankBranch', 'id', 'branch');
    }
}
