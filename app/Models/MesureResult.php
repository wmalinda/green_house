<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MesureResult extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'mesure_results';

    protected $fillable = [
        'location_id', 
        'product_id',
        'edge_devices_id',
        'measure_type_id', 
        'value',
        'capture_at',
        ''
    ];

    // public function BankBranch(){
    // 	return $this->hasMany('App\Modules\BankBranch\Models\BankBranch');
    // }

    // public function SupplierBankDetail(){
    // 	return $this->belongsToMany('App\Modules\Supplier\Models\SupplierBankDetail', 'bank', 'id');
    // }
}
