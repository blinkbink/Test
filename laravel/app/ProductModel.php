<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "product";
    protected $fillable = ['idproduct', 'iduser', 'name_product', 'address', 'price', 'total', 'description', 'information'];


}
