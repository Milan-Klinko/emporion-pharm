@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold text-white mb-10">Vaša korpa</h1>

    @if(empty($items))
        <p class="text-2xl text-white">Korpa je prazna.</p>
    @else
        <div class="bg-white p-8 rounded-lg shadow-xl max-w-4xl">
            @foreach($items as $item)
                <div class="border-b py-4 flex justify-between items-center">
                    <div>
                        <h3 class="text-xl font-bold">{{ $item['product']->name }}</h3>
                        <p>Količina: {{ $item['quantity'] }} × {{ $item['product']->price }} RSD</p>
                    </div>
                    <p class="text-xl font-bold">{{ $item['subtotal'] }} RSD</p>
                </div>
            @endforeach

            <div class="mt-8 text-right">
                <p class="text-3xl font-bold">Ukupno:  {{ $total }} RSD</p>
                <p class="text-lg text-gray-600 mt-2">(dostava besplatna)</p>
            </div>

            <div class="mt-8 flex justify-between">
                <a href="{{ route('catalog') }}" class="bg-red-600 text-white py-3 px-8 rounded text-xl">
                    Nazad na katalog 
                </a>
                <a href="/gift" class="bg-green-600 text-white py-4 px-12 rounded text-2xl font-bold">
                    DALJE → Izbor poklona
                </a>
            </div>
        </div>
    @endif
@endsection