@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="max-w-4xl mx-auto text-center">
    <!-- Page Header -->
    <section class="mb-12">
    <h1 class="text-5xl font-extrabold text-gold mb-4 tracking-wide">About Poker Club</h1>
    <p class="text-lg text-gray-300">Excellence. Integrity. Prestige.</p>
</section>

<!-- Company Overview -->
<section class="bg-black bg-opacity-60 p-8 rounded-lg shadow-lg border border-red-700 mb-12 text-left">
    <h2 class="text-3xl font-bold text-gold mb-4">♠ Who We Are</h2>
    <p class="text-gray-300 leading-relaxed">
        Poker Club was founded by a group of seasoned professionals and passionate card players with a shared goal: to create the most immersive, secure, and prestigious online poker environment available.
    </p>
    <a href="{{ route('about.who') }}" class="text-sm text-gold hover:underline mt-4 inline-block">Read more →</a>
</section>

<!-- Website Mission -->
<section class="bg-black bg-opacity-60 p-8 rounded-lg shadow-lg border border-gold mb-12 text-left">
    <h2 class="text-3xl font-bold text-gold mb-4">♦ Our Aim</h2>
    <p class="text-gray-300 leading-relaxed">
        Our platform is designed to host world-class poker games while cultivating a thriving and respectful player community.
    </p>
    <a href="{{ route('about.mission') }}" class="text-sm text-gold hover:underline mt-4 inline-block">Read more →</a>
</section>

<!-- Vision Statement -->
<section class="bg-black bg-opacity-60 p-8 rounded-lg shadow-lg border border-red-700 text-left">
    <h2 class="text-3xl font-bold text-gold mb-4">♣ Vision & Values</h2>
    <ul class="text-gray-300 list-disc pl-6 leading-relaxed">
        <li><strong>Excellence:</strong> Uphold the highest standards in gameplay, fairness, and platform performance.</li>
        <li><strong>Integrity:</strong> Build trust with transparent rules, anti-cheat enforcement, and secure user data practices.</li>
        <li><strong>Community:</strong> Foster respect, competition, and camaraderie among members.</li>
        <li><strong>Innovation:</strong> Evolve constantly with modern technologies and user-focused features.</li>
    </ul>
    <a href="{{ route('about.vision') }}" class="text-sm text-gold hover:underline mt-4 inline-block">Read more →</a>
</section>

</div>
@endsection
