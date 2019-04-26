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
Route::group(['prefix' => 'modules/customer'], function () {
    Route::get('/index', 'CustomerController@showListCustomer')->name('index');
    Route::get('/delete', 'CustomerController@deleteCustomer')->name('delete');
    Route::get('/edit', 'CustomerController@editCustomer')->name('edit');
    Route::get('/show', 'CustomerController@showCustomer')->name('show');
});

//Route::get('/' , function (){
//    return view('modules.customer.index');
//});