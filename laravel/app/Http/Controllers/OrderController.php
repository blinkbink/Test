<?php

namespace App\Http\Controllers;

use App\PrepaidModel;
use App\ProductModel;
use App\User;
use App\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
       //$User = User::all()->where('iduser', Auth::user()->id);
        //$User = User::all();
        //$User = User::where('id', ProductModel::select('id'));
        //return view('order.order', compact('User'));

        //$User = User::join('product', 'users.id', '=', 'product.iduser')->join('prepaid_balance', 'users.id', '=', 'prepaid_balance.iduser')->where('prepaid_balance.iduser', Auth::user()->id)->paginate(5);
        //Ralation Error
        $product = ProductModel::where('product.iduser', Auth::user()->id)->where('id', 'LIKE', '%'.$search.'%')->paginate(20);
        $preapid = PrepaidModel::where('prepaid_balance.iduser', Auth::user()->id)->where('id', 'LIKE', '%'.$search.'%')->paginate(20);
        //$prepaid = User::join('prepaid_balance', 'users.id', '=', 'prepaid_balance.iduser')->where('prepaid_balance.iduser', Auth::user()->id)->get();
       return View::make('order.order')->with('product', $product)->with('prepaid', $preapid);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
