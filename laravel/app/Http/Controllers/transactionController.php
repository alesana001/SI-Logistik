<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transactionController extends Controller
{
	public function showAll(){
	    $transactions = DB::select('select * from transaksisatuan natural join transaksi order by tanggal desc;');
	    foreach ($transactions as $transaction) {
			echo $transaction->idbarang;
		    echo "<br/>\n";
		}
	}
}
