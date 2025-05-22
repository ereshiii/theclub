@extends('layouts.app')

@section('title', 'Live Tournaments')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black to-gray-900 text-white p-8">
    <div class="max-w-4xl mx-auto bg-[#121212] p-6 rounded-xl shadow-lg border border-red-700">
        <h1 class="text-3xl font-bold text-gold mb-4">🎲 Live Tournaments</h1>
        <p class="mb-4">Our live tournaments bring poker enthusiasts together for real-time action. Here’s what you get:</p>
        <ul class="list-disc list-inside space-y-2">
            <li>Weekly and monthly competitive events</li>
            <li>Secure, real-time game environment</li>
            <li>Live commentary and spectator access</li>
            <li>Exclusive access for verified members only</li>
        </ul>
        <p class="mt-6">Stay tuned on our Events page for upcoming tournament schedules.</p>
    </div>
</div>
@endsection
