<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrepaidBalanceController extends Controller
{
    use AuthorizesRequests, DispatchesJobs;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insert(Request $request){
        $iduser = $request->input('iduser');
        $phone = $request->input('phone');
        $value = $request->input('value');
        $total = $value + ($value/100);
        $information = "pending";
        $description = $value . " For " . $phone;
        $randnumber = rand(0000000000, 9999999999);


        $data = array('idorder'=>$randnumber,'iduser'=>$iduser, 'phone'=>$phone, 'valuee'=>$total, 'description'=>$description, 'information'=>$information);

        DB::table('prepaid_balance')->insert($data);

        echo "<center><h2>Your Order Number : $randnumber</h2></center>";
        echo "<center><h2>To Phone Number : $phone</h2></center>";
        echo "<center><h2>Price : $value</h2></center>";
        echo "<center><h2>Total : $total</h2></center>";

        echo "<center><h3>*Your order will be send after you pay</h3></center><br>";
        echo "<a href='payment'><center><h2>Pay</h2></center></a> <center>or</center> <a href='/home'><center><h4>Dashboard</h4></center></a>";
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prepaid-balance');
    }
}
