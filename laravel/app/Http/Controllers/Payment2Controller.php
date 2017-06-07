<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 06/06/2017
 * Time: 7:35
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Payment2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('payment2');
    }

    public function update(Request $request)
    {
        $pnumber = $request->input('pnumber');
        $status = "Success";
        DB::table('product')->where('idproduct', $pnumber)->update(['information' =>$status]);

        echo "<center><h3>Thank You ! Your order will be send in a minutes</h3></center>";
        echo "<a href='/home'>Dashboard</a>";
    }
}