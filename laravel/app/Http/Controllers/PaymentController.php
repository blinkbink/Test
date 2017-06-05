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
        DB::table('prepaid_balance')->where('idorder', $pnumber)->update(['information' =>$status]);
    }
}