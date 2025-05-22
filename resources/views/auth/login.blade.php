@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-[#1b1b1b] to-[#2c2c2c]">
    <div class="w-full max-w-md p-8 bg-[#121212] rounded-2xl shadow-lg border border-[#333]">
        <h1 class="text-3xl font-bold text-center text-yellow-400  mb-6 tracking-wide font-serif">Welcome Back</h1>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-[#bbb]">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       placeholder="you@example.com"
                       class="w-full px-4 py-2 bg-[#1e1e1e] border border-[#444] text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gold"
                       required>
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-medium text-[#bbb]">Password</label>
                <input type="password" id="password" name="password"
                       placeholder="••••••••"
                       class="w-full px-4 py-2 bg-[#1e1e1e] border border-[#444] text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-gold"
                       required>
            </div>

            <div class="flex items-center justify-between text-sm text-gray-400">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember" class="accent-gold">
                    <span>Remember me</span>
                </label>
            </div>

            <button type="submit"
                    class="w-full py-2 font-semibold text-[#121212] bg-gold hover:bg-yellow-400 rounded-lg transition duration-200">
                Sign In
            </button>

            <p class="text-center text-sm text-gray-400">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-gold hover:underline">Register</a>
            </p>
        </form>
    </div>
</div>
@endsection
