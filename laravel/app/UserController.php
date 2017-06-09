<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserController extends Model
{
    protected $table = "users";
    protected $fillable = ['id', 'name', 'email', 'password', 'remember_token'];


    public function Prepaid()
    {
        //return PrepaidModel::where('iduser', $this->id)->pluck('idorder');
        //return $this->hasOne('App\PrepaidModel');
    }

}
