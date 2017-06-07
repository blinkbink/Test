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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

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

        $letter = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 8)), 0, 8);
        $status = "Shipping Code:" . $letter;

        if($roles = DB::table('product')->where('idproduct', $pnumber)->pluck('information')->count() <= 0)
        {
            echo "<center><h3>Order ID cant be found</h3></center>";
            echo "<a href='/home'>Dashboard</a>";
        }

        else
        {
            $roles = DB::table('product')->where('idproduct', $pnumber)->pluck('information');
            foreach ($roles as $name => $check) {
            }

            if ($check != "Success" && $check != "Cancelled" && $check != "Failed by Time") {
                echo "<center><h3>Your Order Already Payed with $check </h3></center>";
                echo "<a href='/home'>Dashboard</a>";
            }

            if ($check == "Success") {
                echo "<center><h3>Your Order Already Payed</h3></center>";
                echo "<a href='/home'>Dashboard</a>";
            }
            if ($check == "Cancelled") {
                echo "<center><h3>Sorry, Your order has been Cancelled</h3></center>";
                echo "<a href='/home'>Dashboard</a>";
            }

            if ($check == "Failed by Time") {
                echo "<center><h3>Sorry, Your order has been Failed, Payment period expire after 5 minutes after the order placed</h3></center>";
                echo "<a href='/home'>Dashboard</a>";
            }
            if ($check == "pending") {
                DB::table('product')->where('idproduct', $pnumber)->where('idproduct', $pnumber)->update(['information' => $status]);

                echo "<center><h3>Thank You ! Your order will be send in a minutes</h3></center>";
                echo "<a href='/home'>Dashboard</a>";
            }
        }
    }

    public function status(Request $request)
    {
        $id = Input::get("id");
        $status = "Cancelled";
        DB::table('product')->where('idproduct', $id)->update(['information' =>$status]);

        echo "<center><h3>Your Order has been Cancell</h3></center>";
        echo "<a href='/home'>Dashboard</a>";
    }
}