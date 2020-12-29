<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockPurchase extends Model
{
    use HasFactory;
    protected $table = 'purchase';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'price','availableStock','boxID','supplyerID'
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'boxID', 'boxID');
    }
    public function supplyer()
    {
        return $this->belongsTo('App\Models\Supplyer', 'supplyerID', 'id')->select(array('id', 'name','Adress','contact','total_balance','paid'));
    }
}
