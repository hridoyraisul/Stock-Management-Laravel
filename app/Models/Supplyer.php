<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplyer extends Model
{
    use HasFactory;
    protected $primaryKey ='id';


    protected $fillable = [
        'name','publication_status','total_balance','paid','Adress','contact','type'
    ];
    public function payment()
    {
        return $this->hasMany('App\Models\SupplyerPayment', 'supplyersID', 'id');
    }
    public function stock()
    {
        return $this->hasMany('App\Models\StockPurchase', 'supplyerID', 'id');
    }
    public function stockUnpaid()
    {
        return $this->hasMany('App\Models\StockPurchase', 'supplyerID', 'id')->where('statusPaid',-1);
    }

}
