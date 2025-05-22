@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#1b1b1b] to-[#2c2c2c] text-white p-6">
    <div class="max-w-4xl mx-auto bg-[#121212] rounded-xl shadow-lg p-8 border border-[#333]">
        <h1 class="text-3xl font-bold mb-4 text-gold">Welcome, {{ $user->name }}</h1>

        <div class="grid grid-cols-2 gap-6 mt-6">
            <div class="p-4 bg-[#1e1e1e] rounded-lg border border-[#444]">
                <h2 class="text-xl font-semibold text-gold mb-2">Events Joined</h2>
                <p class="text-lg">{{ $stats['events_joined'] }}</p>
            </div>

            <div class="p-4 bg-[#1e1e1e] rounded-lg border border-[#444]">
                <h2 class="text-xl font-semibold text-gold mb-2">Win/Loss Ratio</h2>
                <p class="text-lg">{{ $stats['wins'] }} Wins / {{ $stats['losses'] }} Losses</p>
            </div>

            <div class="col-span-2 p-4 bg-[#1e1e1e] rounded-lg border border-[#444]">
                <h2 class="text-xl font-semibold text-gold mb-2">Notifications</h2>
                <ul class="list-disc list-inside text-sm">
                    @foreach($stats['notifications'] as $note)
                        <li>{{ $note }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="col-span-2 p-4 bg-[#1e1e1e] rounded-lg border border-[#444]">
                <h2 class="text-xl font-semibold text-gold mb-2">Membership Status</h2>
                <p class="text-lg">{{ $stats['membership_status'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
