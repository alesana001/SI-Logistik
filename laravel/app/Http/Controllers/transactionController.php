<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

	public function add(Request $request){
		DB::insert('insert into transaksi (tanggal, jenistransaksi, pengirim, penerima, asramatujuan) values (?, ?, ?, ?, ?)', [$request->input('tanggal'), $request->input('jenistransaksi'), $request->input('pengirim'), $request->input('penerima'), $request->input('asramatujuan')]);
		$last = DB::select('SELECT LAST_INSERT_ID() as lastid');
		$len = count($request->input('barang'));
		for ($i=0;$i<$len;$i++) {
			// echo $request->input('barang')[$i];
			// echo "<br/>";
			// echo $request->input('jumlah')[$i];
			// echo "<br/>";
			// echo $request->input('keterangan')[$i];
			// echo "<br/>";
			DB::insert('insert into transaksisatuan(idbarang,idtransaksi,jumlah,keterangan) values (?,?,?,?)', [$request->input('barang')[$i],$last[0]->lastid,$request->input('jumlah')[$i],$request->input('keterangan')[$i]]);
		}
		return Redirect::to('/transaksi');
	}
}
