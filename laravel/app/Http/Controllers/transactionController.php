<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transactionController extends Controller
{
	public function showAll(){
	    $transactions = DB::table("transaksi")->orderBy("tanggal","desc")->get();
	    return \View::make('transaction', compact("transactions"));
	}

	public function showDetail($id){
		$transaction = DB::table("transaksi")->join("transaksisatuan","transaksi.idtransaksi","=","transaksisatuan.idtransaksi")->where("transaksisatuan.idtransaksi",$id)->get();
		return \View::make('transactionDetail',compact("transaction"));
	}
}
