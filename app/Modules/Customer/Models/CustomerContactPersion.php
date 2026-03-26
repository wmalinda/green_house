<?php

namespace App\Modules\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CustomerContactPersion extends Model
{
    use Notifiable;

    protected $table = 'customer_contact_persions';

    protected $fillable = [
        'customer_id', 
        'name',
        'designation',
        'contact',
        'email'
    ];

    public function Customer(){
    	return $this->belongsTo('App\Modules\Customer\Models\Customer', 'customer_id', 'id');
    }
}
