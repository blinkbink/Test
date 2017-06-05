<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 05/06/2017
 * Time: 18:16
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class prepaid extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iduser', 'phone', 'value',
    ];
}