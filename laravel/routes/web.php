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


//Index
Route::get('/home', 'HomeController@index');
Route::get('/prepaid-balance', 'PrepaidController@index');
Route::get('/product', 'ProductController@index');
Route::any('/order', 'OrderController@index');


//Review & Store Data
Route::post('/prereview', 'PrepaidController@store');
Route::post('/proreview', 'ProductController@store');



Route::post('/success', 'PrepaidBalanceController@insert')->name('prepaid-balance-success');
Route::post('/productsuccess', 'ProductController@insert')->name('productsuccess');

Route::get('/payment', 'PaymentController@index')->name('payment');
Route::post('/pay', 'PaymentController@update')->name('pay');



Route::get('/payment2', 'Payment2Controller@index')->name('payment2');
Route::post('/pay2', 'Payment2Controller@update')->name('pay2');


Route::get('/cprod', 'Payment2Controller@status')->name('cprod');
Route::get('/cpre', 'PaymentController@status')->name('cpre');