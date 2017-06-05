<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prepaid-balance', 'PrepaidBalanceController@index')->name('prepaid-balance');
Route::post('/success', 'PrepaidBalanceController@insert')->name('prepaid-balance-success');
Route::get('/payment', 'PaymentController@index')->name('payment');
Route::post('/pay', 'PaymentController@update')->name('pay');