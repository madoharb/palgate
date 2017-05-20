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
    return view('welcome');
});
Route::get('/sites', function () {
    return view('vendor.adminlte.sites');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/orders', function () {
    return view('vendor.adminlte.orders');
});
Route::get('/palbank', function () {
    return view('vendor.palbank');
});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
