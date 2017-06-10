<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("product.product");
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product' => 'required|min:10|max:150',
            'address' => 'required|min:10|max:150',
            'price' => 'required|numeric',
        ]);

        $rand = rand(0000000000, 9999999999);

        $product = new ProductModel();
        $product-> id = $rand;
        $product-> iduser = $request->input('iduser');
        $product-> name_product = $request->input('product');
        $product-> address = $request->input('address');
        $product-> price = $request->input('price');
        $product-> total = $request->input('price') + 10000;
        $product-> description = $request->input('product'). " That Cost ". $request->input('price');
        $product-> information = "Pending";

        $product->save();

        return view("product.review")->with(array('ordernumber'=>$rand, 'total'=> $request->input('price') + 10000, 'product'=>$request->input('product'), 'price'=>$request->input('price')
        ));
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
        $edit = ProductModel::find($id);
        return view('product.payment2', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ordernumber = $request->input('ordernumber');
        $array90 = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1);
        $array40 = array(0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1);

        $rand1 = array_rand($array90);
        $rand2 = array_rand($array40);

        $best = $array90[$rand1];
        $worst = $array40[$rand2];

        $edit = ProductModel::find($ordernumber);

        if(date("G:i") > '09:00' && date("G:i") < '17:00')
        {
            if($best == 0)
            {
                if($edit->information == "Pending")
                {
                    $edit ->information = "Success";
                    $edit->save();
                }
            }
            else
            {
                return view('status', compact('edit'));
            }
        }
        if(date("G:i") > '17:00' && date("G:i") < '09:00')
        {
            if($worst == 0)
            {
                if($edit->information == "Pending")
                {
                    $edit ->information = "Success";
                    $edit->save();
                }
            }
            else
            {
                return view('status', compact('edit'));
            }
        }

        return view('status', compact('edit'));
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
