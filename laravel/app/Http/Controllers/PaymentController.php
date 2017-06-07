<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 05/06/2017
 * Time: 20:30
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('payment');
    }

    public function update(Request $request)
    {
        $pnumber = $request->input('pnumber');
        $status = "Success";

        $roles = DB::table('prepaid_balance')->where('idorder', $pnumber)->pluck('information');

        foreach ($roles as $name => $check) {
        }

        if($check == "Success")
        {
            echo "<center><h3>Your Order Already Payed</h3></center>";
            echo "<a href='/home'>Dashboard</a>";
        }
        if($check == "Cancelled")
        {
            echo "<center><h3>Sorry, Your order has been Cancelled</h3></center>";
            echo "<a href='/home'>Dashboard</a>";
        }
        if($check == "Failed by Time")
        {
            echo "<center><h3>Sorry, Your order has been Failed, Payment period expire after 5 minutes after the order placed</h3></center>";
            echo "<a href='/home'>Dashboard</a>";
        }
        if($check == "pending")
        {
            DB::table('prepaid_balance')->where('idorder', $pnumber)->update(['information' =>$status]);

            echo "<center><h3>Thank You ! Your order will be send in a minutes</h3></center>";
            echo "<a href='/home'>Dashboard</a>";
        }
    }

    public function status(Request $request)
    {
        $id = Input::get("id");
        $status = "Cancelled";
        DB::table('prepaid_balance')->where('idorder', $id)->update(['information' =>$status]);

        echo "<center><h3>Your Order has been Cancell</h3></center>";
        echo "<a href='/home'>Dashboard</a>";
    }
}