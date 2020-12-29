<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplyerPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount','supplyersID','remarks','paymentMethod','boxID','statusPaid'
    ];


    public function supplyer()
    {
        return $this->belongsTo('App\Models\Supplyer', 'supplyersID', 'id')->select(array('id', 'name','total_balance','paid'));
    }
    public function paymentMethod()
    {
        return $this->belongsTo('App\Models\PaymentMethod', 'paymentMethod', 'ID')->select(array('ID', 'Type'));
    }
}
