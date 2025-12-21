@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-8">Režim za zaposlene - Lista porudžbina</h1>
    <div class="space-y-6">
        @foreach($orders as $order)
            <div class="bg-gray-300 p-6 rounded-lg">
                <p><strong>Porudžbina #{{ $order->order_number }}</strong></p>
                <p>Kupac: {{ $order->customer_name }}</p>
                <p>Adresa: {{ $order->customer_address }}</p>
                <p>Termin: {{ $order->delivery_date }} {{ $order->delivery_time }}</p>
                <p>Status: {{ $order->status }}</p>
            </div>
        @endforeach
    </div>
    <a href="/" class="mt-8 bg-red-500 text-white px-6 py-3 rounded inline-block">IZAĐI</a>
@endsection