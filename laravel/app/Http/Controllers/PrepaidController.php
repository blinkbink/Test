<?php

namespace App\Http\Controllers;

use App\PrepaidModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class PrepaidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("prepaid.prepaid");
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
            'phone' => 'required|min:7|max:12|regex:/(0)[0-9]{3}/',
            'nominal' => 'required',
        ]);

        $rand = rand(0000000000, 9999999999);
        $total = $request->input('nominal') + ($request->input('nominal')/100);
        $phone = $request->input('phone');
        $nominal = $request->input('nominal');

        $prepaid = new PrepaidModel();
        $prepaid-> id = $rand;
        $prepaid-> iduser = $request->input('iduser');
        $prepaid-> phone = $request->input('phone');
        $prepaid-> nominal = $request->input('nominal');
        $prepaid-> description = $request->input('nominal'). " For ". $request->input('phone');
        $prepaid-> information = "Pending";
        $prepaid-> total = $total;

        $prepaid->save();

        return view("prepaid.review")->with(array('ordernumber'=>$rand, 'total'=>$total, 'phone'=>$phone, 'nominal'=>$nominal));
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
        $edit = PrepaidModel::find($id);
        return view('prepaid.payment', compact('edit'));
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

        $edit = PrepaidModel::find($ordernumber);

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
