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

Route::get('/transaksi', 'transactionController@showAll');

Route::get('/transaksi/detail/{id}', ['uses' => 'transactionController@showDetail']);

Route::get('/transaksi/tambah', function(){
	$names = DB::table("barang")->select("nama")->distinct()->get();
	return \View::make('transactionAdd', compact("names"));
});