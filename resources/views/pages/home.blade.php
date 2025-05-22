@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center">
    <!-- Hero Section -->
    <section class="py-20 px-6 bg-black bg-opacity-70 rounded-lg shadow-lg">
        <h1 class="text-5xl font-extrabold text-gold mb-4 tracking-wide">♠ Welcome to Poker Club</h1>
        <p class="text-xl text-gray-300 mb-6">Elite Tables. Real Players. Unmatched Prestige.</p>
        <a href="{{ route('register') }}" class="inline-block px-6 py-3 bg-red-700 hover:bg-red-800 text-white font-semibold rounded-lg shadow-lg transition">
            Join the Game
        </a>
    </section>

    <!-- Features -->
    <section class="mt-16 grid md:grid-cols-3 gap-8 text-left">
        <div class="bg-black bg-opacity-60 p-6 rounded-lg border border-red-700 shadow-lg">
            <h3 class="text-2xl font-bold text-gold mb-2">🎲 Live Tournaments</h3>
            <p class="text-gray-300">
                Experience real-time action in our exclusive, members-only events.
                <a href="{{ route('live.tournaments') }}" class="text-gold hover:underline ml-2">View</a>
            </p>
        </div>

        <div class="bg-black bg-opacity-60 p-6 rounded-lg border border-gold shadow-lg">
            <h3 class="text-2xl font-bold text-gold mb-2">💰 High-Stakes Tables</h3>
            <p class="text-gray-300">
                Compete with elite players for serious prizes and recognition.
                <a href="{{ route('high.stakes.tables') }}" class="text-gold hover:underline ml-2">View</a>
            </p>
        </div>
       <div class="bg-black bg-opacity-60 p-6 rounded-lg border border-red-700 shadow-lg">
            <h3 class="text-2xl font-bold text-gold mb-2">♣ Member Benefits</h3>
            <p class="text-gray-300">Gain access to premium perks, loyalty rewards, and exclusive invites.</p>
            <a href="{{ route('member.benefits') }}" class="text-gold underline text-sm mt-2 inline-block">Read More</a>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="mt-20 py-10 bg-gradient-to-r from-black via-red-900 to-black rounded-xl shadow-lg">
        <h2 class="text-4xl text-gold font-bold mb-4">Your Seat at the Table Awaits</h2>
        <p class="text-gray-300 text-lg mb-6">Sign up today and start your journey to becoming a poker legend.</p>
        <a href="{{ route('register') }}" class="px-6 py-3 bg-gold text-black font-bold rounded shadow hover:bg-yellow-400 transition">
            Register Now
        </a>
    </section>
</div>
@endsection
