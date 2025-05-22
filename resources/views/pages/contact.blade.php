@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="max-w-3xl mx-auto">
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gold mb-4">♠ Get in Touch</h1>
        <p class="text-gray-300 text-lg">We're here to help. Reach out through our form or alternative channels below.</p>
    </section>

    <!-- Contact Form -->
    <section class="bg-black bg-opacity-60 p-8 rounded-lg shadow-lg border border-red-700 mb-12">
        @if (session('success'))
            <div class="bg-green-700 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block text-gold font-semibold">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="w-full mt-1 p-3 rounded bg-gray-900 text-white border border-gray-700 focus:border-red-600">
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block text-gold font-semibold">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="w-full mt-1 p-3 rounded bg-gray-900 text-white border border-gray-700 focus:border-red-600">
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="message" class="block text-gold font-semibold">Message</label>
                <textarea name="message" id="message" rows="5"
                    class="w-full mt-1 p-3 rounded bg-gray-900 text-white border border-gray-700 focus:border-red-600">{{ old('message') }}</textarea>
                @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="text-center">
                <button type="submit"
                    class="bg-red-700 hover:bg-red-800 text-white font-bold px-6 py-3 rounded transition shadow">
                    Send Message
                </button>
            </div>
        </form>
    </section>

    <!-- Alternative Contact Info -->
    <section class="bg-black bg-opacity-60 p-6 rounded-lg shadow-lg border border-gold text-center">
        <h2 class="text-2xl font-bold text-gold mb-4">📞 Other Ways to Reach Us</h2>
        <ul class="text-gray-300 space-y-2">
            <li><strong>Email:</strong> <a href="mailto:support@pokerclub.com" class="text-gold hover:underline">support@pokerclub.com</a></li>
            <li><strong>Phone:</strong> <span class="text-gold">+1 (555) 123-4567</span></li>
            <li><strong>Address:</strong> <span class="text-gold">123 Elite Poker Avenue, Las Vegas, NV</span></li>
        </ul>

        <!-- Social Links -->
        <div class="mt-6 flex justify-center space-x-6">
            <a href="#" class="text-gold hover:text-yellow-400 text-2xl" title="Facebook">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#" class="text-gold hover:text-yellow-400 text-2xl" title="Twitter/X">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="#" class="text-gold hover:text-yellow-400 text-2xl" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gold hover:text-yellow-400 text-2xl" title="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </section>
</div>
@endsection
