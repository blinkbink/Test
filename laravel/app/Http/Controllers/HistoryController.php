<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 06/06/2017
 * Time: 7:42
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('history');
    }

    public function display(Request $request)
    {
        $id = Auth::user()-> id ;
        $search = $request->input('search');
        if($search!=null)
        {
            $prepaid['prepaid'] = DB::table('users')->join('prepaid_balance', 'users.id', 'prepaid_balance.iduser')->where('prepaid_balance.iduser',$id)->where('idorder','like', '%'.$search.'%')->orderby('time', 'DSC')->paginate(20);
            $product['product'] = DB::table('users')->join('product', 'users.id', 'product.iduser')->where('product.iduser',$id)->where('idproduct','like','%'.$search.'%')->orderby('time', 'DSC')->paginate(20);
        }
        if($search==null)
        {
            $prepaid['prepaid'] = DB::table('users')->join('prepaid_balance', 'users.id', 'prepaid_balance.iduser')->where('prepaid_balance.iduser',$id)->orderby('time', 'DSC')->paginate(20);
            $product['product'] = DB::table('users')->join('product', 'users.id', 'product.iduser')->where('product.iduser',$id)->orderby('time', 'DSC')->paginate(20);
        }

        return view('history', $product, $prepaid);
    }
}