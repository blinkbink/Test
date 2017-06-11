<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function product()
    {
        return ProductModel::all()->pluck('id');
        //return ProductModel::all()->pluck('id')where('iduser', $this->id)->value('name_product', 'description', 'information', 'total');
        //return $this->belongsTo('App\ProductModel');
    }

    public function prepaid()
    {
        //return $this->belongsTo('App\PrepaidModel');
        //return $this->belongsTo('App\PrepaidModel');
        return PrepaidModel::where('iduser', $this->id)->get();
    }
}
