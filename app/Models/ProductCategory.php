<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'productstyles';
    protected $fillable = [
        'name','status','created_at','update_at'
    ];
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'styleID', 'id');
    }
}
