<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserController extends Model
{
    protected $table = "users";
    protected $fillable = ['id', 'name', 'email', 'password', 'remember_token'];

    public function product()
    {
        //return $this->belongsTo('App\ProductModel');
        //return ProductModel::where('iduser', Auth::user()->id)->get();
        //return $this->hasMany('App\ProductModel')->select(array('id'));
        return $this->hasMany('App\ProductModel');
    }
}
