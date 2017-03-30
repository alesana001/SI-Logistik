@extends('layout')

@section('header')
	transaksi
@stop

@section('content')
    @foreach($transactions as $transaction)
        <p>{{ $transaction->idbarang }}</p>
    @endforeach
@stop