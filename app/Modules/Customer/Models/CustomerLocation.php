<?php

namespace App\Modules\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CustomerLocation extends Model
{
    use Notifiable;

    protected $table = 'customer_locations';

    protected $fillable = [
        'customer_id',
        'location_id',
        'start_date',
        'end_date',
        'status'
    ];

    public function Customer(){
    	return $this->belongsTo('App\Modules\Customer\Models\Customer', 'customer_id', 'id');
    }

    public function Location(){
    	return $this->belongsTo('App\Modules\Location\Models\Location', 'location_id', 'id');
    }
}
