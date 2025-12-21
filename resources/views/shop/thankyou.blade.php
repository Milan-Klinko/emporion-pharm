@extends('layouts.app')

@section('content')
    <div class="text-center text-white">
        <h1 class="text-4xl font-bold mb-8">Hvala na porudžbini broj #{{ $order->order_number }}!</h1>
        <p class="text-xl">Porudžbina je uspešno prosleđena.</p>
        <p class="text-xl mt-4">Ukupna cena: 8000 RSD (dostava besplatna)</p>
        <p class="text-xl">Adresa: {{ $order->customer_address }}</p>
        <p class="text-xl">Termin: {{ $order->delivery_date }} u {{ $order->delivery_time }}</p>
        <a href="/" class="inline-block mt-8 bg-green-500 text-white px-8 py-4 rounded text-xl">IZAĐI</a>
    </div>
@endsection