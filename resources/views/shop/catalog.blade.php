@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-8">Izaberite lekove i suplemente</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
            <div class="bg-gray-300 p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-4">{{ $product->name }}</h3>
                <p class="text-lg mb-2">Cena: {{ $product->price }} RSD</p>
                <p class="text-lg mb-6">Na stanju: {{ $product->stock }}</p>

                <form action="{{ route('cart.add', $product) }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded transition">
                        Dodaj u korpu
                    </button>
                </form>
            </div>
        @endforeach
    </div>

    <div class="mt-12 flex justify-between">
        <a href="{{ route('catalog') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-8 rounded text-xl transition">
            Nazad
        </a>
        <a href="{{ route('cart.view') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-12 rounded text-2xl transition">
            PREGLED KORPE
        </a>
    </div>
@endsection