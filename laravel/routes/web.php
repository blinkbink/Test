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

Route::get('/product', 'ProductController@index')->name('product');
Route::post('/productsuccess', 'ProductController@insert')->name('productsuccess');

Route::get('/payment2', 'Payment2Controller@index')->name('payment2');
Route::post('/pay2', 'Payment2Controller@update')->name('pay2');

Route::any('/order', 'HistoryController@display')->name('order');

//Route::get('/update_history{id}', 'HistoryController@display')->name('update_history');
Route::get('/cprod', 'Payment2Controller@status')->name('cprod');
Route::get('/cpre', 'PaymentController@status')->name('cpre');