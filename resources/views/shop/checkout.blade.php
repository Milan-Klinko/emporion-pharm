@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-8">Detalji dostave</h1>
    <form action="{{ route('order.store') }}" method="POST" class="bg-white p-8 rounded-lg max-w-2xl">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Ime i prezime:</label>
            <input type="text" name="customer_name" required class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Adresa:</label>
            <input type="text" name="customer_address" required class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Datum dostave:</label>
            <input type="date" name="delivery_date" required class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Vreme dostave:</label>
            <input type="time" name="delivery_time" required class="w-full p-2 border rounded">
        </div>
        <button type="submit" class="bg-green-500 text-white px-8 py-4 rounded text-xl">POTVRDI</button>
    </form>
@endsection