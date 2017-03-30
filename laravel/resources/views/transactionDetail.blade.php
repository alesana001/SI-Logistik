@extends('layout')

@section('title')
	transaksi {{$transaction[0]->idtransaksi}}
@stop

@section('content')
	@foreach($transaction as $detail)
		{{ $detail->idbarang }}
	@endforeach
@stop