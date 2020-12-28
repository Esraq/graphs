<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::Resource('/','App\Http\Controllers\SiteController');


     Route::get('/pay', 'App\Http\Controllers\PublicSslCommerzPaymentController@index');
    Route::POST('/success', 'App\Http\Controllers\PublicSslCommerzPaymentController@success');
    Route::POST('/fail', 'App\Http\Controllers\PublicSslCommerzPaymentController@fail');
    Route::POST('/cancel', 'App\Http\Controllers\App\Http\Controllers\PublicSslCommerzPaymentController@cancel');
    Route::POST('/ipn', 'App\Http\Controllers\PublicSslCommerzPaymentController@ipn');


    Route::get('/test','App\Http\Controllers\TestController@index');
