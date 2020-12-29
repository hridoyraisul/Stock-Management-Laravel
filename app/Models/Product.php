<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tbl_products';
    public function stock()
    {
        return $this->belongsTo('App\Models\StockPurchase', 'id', 'boxID');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brandID', 'ID')->select(array('ID', 'name'));
    }
    public function styles()
    {
        return $this->belongsTo('App\Models\ProductCategory', 'styleID', 'id')->select(array('id', 'name'));
    }
    public function stockID()
    {
        return $this->belongsTo('App\Models\StockPurchase', 'id', 'boxID')->select(array('boxID'));
    }
}
