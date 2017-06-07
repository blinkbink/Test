<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 06/06/2017
 * Time: 7:42
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

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

    public function display()
    {
        $data['data'] = DB::table('prepaid_balance', 'product')->simplePaginate(10);

        if(count($data) > 0)
        {
            return view('history', $data);
        }
        else
        {
            return view('history');
        }

    }
}