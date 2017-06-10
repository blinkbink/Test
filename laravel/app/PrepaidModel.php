<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrepaidModel extends Model
{
    protected $table = "prepaid_balance";
    protected $fillable = ['idorder', 'iduser', 'phone', 'nominal', 'description', 'information', 'total'];

}
