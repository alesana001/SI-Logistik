@extends('layout')

@section('title')
	transaksi
@stop

@section('content')
	<h1>Transaksi</h1>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>tanggal</th>
					<th>pengirim</th>
					<th>penerima</th>
					<th>tujuan</th>
					<th>detail</th>
				</tr>
			</thead>
			<tbody>
				@foreach($transactions as $transaction)
					@if ($transaction->jenistransaksi == "masuk")
						<tr bgcolor="#f74251">
					@else
						<tr bgcolor="#9bf943">
					@endif
						<td>{{ $transaction->idtransaksi }}</td>
						<td>{{ $transaction->tanggal }}</td>
						<td>{{ $transaction->pengirim }}</td>
						<td>{{ $transaction->penerima }}</td>
						<td>{{ $transaction->asramatujuan }}</td>
						<td><button type="button" class="btn btn-primary btn-xs" onclick="location.href='/transaksi/detail/{{ $transaction->idtransaksi }}'">lihat detail</button></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop