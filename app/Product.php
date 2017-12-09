<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable =[
    'productName','productPrice','productQuantity',
    'productSortDescription','productLongtDescription','publicationStatus','productImage',
    ];

}
