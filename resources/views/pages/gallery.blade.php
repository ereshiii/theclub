@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="max-w-6xl mx-auto">
    <h1 class="text-4xl font-bold text-gold mb-10 text-center">♣ Poker Moments Gallery</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Sample Image 1 -->
        <div class="bg-black bg-opacity-60 rounded-lg shadow-lg overflow-hidden border border-red-700">
            <img src="{{ asset('images/gallery/poker-table.jpg') }}" alt="Poker Table Setup" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-gold font-semibold text-lg mb-1">High Stakes Table</h3>
                <p class="text-gray-300 text-sm">The action heats up at our flagship high stakes table.</p>
            </div>
        </div>

        <!-- Sample Image 2 -->
        <div class="bg-black bg-opacity-60 rounded-lg shadow-lg overflow-hidden border border-gold">
            <img src="{{ asset('images/gallery/chips-stack.jpg') }}" alt="Stack of Poker Chips" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-gold font-semibold text-lg mb-1">Chips on the Table</h3>
                <p class="text-gray-300 text-sm">Big bets, bigger rewards — the thrill of poker stakes.</p>
            </div>
        </div>

        <!-- Sample Image 3 -->
        <div class="bg-black bg-opacity-60 rounded-lg shadow-lg overflow-hidden border border-red-700">
            <img src="{{ asset('images/gallery/cards-hand.jpg') }}" alt="Winning Hand" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-gold font-semibold text-lg mb-1">Winning Hand</h3>
                <p class="text-gray-300 text-sm">Every hand tells a story — here’s one for the books.</p>
            </div>
        </div>

        <!-- Add more images similarly -->
    </div>
</div>
@endsection
