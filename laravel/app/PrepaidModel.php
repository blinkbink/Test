<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrepaidModel extends Model
{
    protected $table = "prepaid_balance";
    protected $fillable = ['idorder', 'iduser', 'phone', 'nominal', 'description', 'information', 'total'];


    public function Prepaid()
    {
        return User::where('id', $this->iduser)->first()->name;
        //return $this->belongsTo('App\User');
    }
}
