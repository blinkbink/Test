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

//Update Payment Prepaid
Route::any('/prepay/{id}', 'PrepaidController@edit');
Route::any('/payment', 'PrepaidController@update');

//Update Payment Product
Route::any('/propay/{id}', 'ProductController@edit');
Route::any('/payment2', 'ProductController@update');