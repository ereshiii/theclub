@extends('layouts.app')

@section('title', 'Member Benefits')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-black to-gray-900 text-white p-8">
    <div class="max-w-4xl mx-auto bg-[#121212] p-6 rounded-xl shadow-lg border border-red-700">
        <h1 class="text-3xl font-bold text-gold mb-4">♣ Member Benefits</h1>
        <p class="mb-4">Becoming a verified member of PokerSite grants you access to a range of exclusive perks and
            rewards:</p>
        <ul class="list-disc list-inside space-y-2">
            <li>Priority access to events and tournaments</li>
            <li>Loyalty reward system with redeemable chips</li>
            <li>Exclusive invites to VIP poker nights</li>
            <li>Personalized event notifications and updates</li>
            <li>Access to high-stakes tables and private lounges</li>
        </ul>
        <p class="mt-6">Memberships are reviewed monthly and unlock more features based on participation.</p>
    </div>
</div>
@endsection