@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-white mb-8">Izaberite svoj poklon:</h1>
    <div class="grid grid-cols-3 gap-8">
        @foreach($giftPacks as $pack)
            <div class="bg-gray-300 p-8 rounded-lg text-center">
                <h3 class="text-2xl font-bold mb-4">{{ $pack->name }}</h3>
                <p>{{ $pack->description }}</p>
            </div>
        @endforeach
    </div>
    <div class="mt-8 flex justify-between">
        <a href="{{ route('catalog') }}" class="bg-red-500 text-white px-6 py-3 rounded">Nazad</a>
        <a href="/checkout" class="bg-green-500 text-white px-8 py-4 rounded text-xl">DALJE</a>
    </div>
@endsection