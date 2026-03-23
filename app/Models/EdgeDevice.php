<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EdgeDevice extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'edge_devices';

    protected $fillable = [
        'name', 
        'code',
        'status'
    ];

    // public function BankBranch(){
    // 	return $this->hasMany('App\Modules\BankBranch\Models\BankBranch');
    // }

    // public function SupplierBankDetail(){
    // 	return $this->belongsToMany('App\Modules\Supplier\Models\SupplierBankDetail', 'bank', 'id');
    // }
}
