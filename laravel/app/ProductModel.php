<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "product";
    protected $fillable = ['idproduct', 'iduser', 'name_product', 'address', 'price', 'total', 'description', 'information'];

    public function user()
    {
        //return $this->belongsTo('App\ProductModel');
        //return ProductModel::where('iduser', Auth::user()->id)->get();
        //return $this->hasMany('App\ProductModel')->select(array('id'));
        return $this->belongsTo('App\UserController');
    }
}
