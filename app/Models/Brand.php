<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'products_brand';

    protected $fillable = [
        'name','publication_status','date','ID','brandID'
    ];
}
