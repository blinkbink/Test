<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 06/06/2017
 * Time: 6:55
 */

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
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

    public function insert(Request $request)
    {
        $product = $request->input('product');
        $address = $request->input('address');
        $price = $request->input('price');
        $iduser = $request->input('iduser');

        $total = $price + 10000;
        $information = "pending";
        $description = $product . " that cost " . $price;
        $randnumber = rand(0000000000, 9999999999);

        $data = array('idproduct' => $randnumber, 'iduser' => $iduser, 'name_product' => $product, 'address' => $address, 'price' => $price, 'total' => $total, 'description' => $description, 'information' => $information);

        DB::table('product')->insert($data);

        echo "<center><h2>Your Order Number : $randnumber</h2></center>";
        echo "<center><h2>For Product : $product</h2></center>";
        echo "<center><h2>Price : $price</h2></center>";
        echo "<center><h2>Total : $total</h2></center>";

        echo "<center><h3>*Your order will be send after you pay</h3></center><br>";
        echo "<a href='payment2'><center><h2>Pay</h2></center></a> <center>or</center> <a href='/home'><center><h4>Dashboard</h4></center></a>";
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product');
    }
}