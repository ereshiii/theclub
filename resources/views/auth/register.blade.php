@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-[#1b1b1b] to-[#2c2c2c]">
    <div class="w-full max-w-md p-8 bg-[#121212] rounded-2xl shadow-lg border border-[#333] text-gray-200">
        <h1 class="text-3xl font-bold text-center text-yellow-400 mb-6 tracking-wide font-serif">Create Your Account</h1>

        <form method="POST" action="{{ route('register') }}" novalidate class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block mb-1 text-sm font-medium">Full Name</label>
                <input id="name" name="name" type="text"
                       class="w-full px-4 py-2 bg-[#1f1f1f] text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                       required minlength="3" maxlength="50"
                       value="{{ old('name') }}" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block mb-1 text-sm font-medium">Email Address</label>
                <input id="email" name="email" type="email"
                       class="w-full px-4 py-2 bg-[#1f1f1f] text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                       required maxlength="100"
                       value="{{ old('email') }}" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block mb-1 text-sm font-medium">Password</label>
                <input id="password" name="password" type="password"
                       class="w-full px-4 py-2 bg-[#1f1f1f] text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                       required minlength="8" maxlength="20"
                       pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&^+=()_\-])[A-Za-z\d@$!%*#?&^+=()_\-]{8,20}$"
                       title="8–20 characters, at least 1 uppercase, 1 lowercase, 1 number, 1 special character. No spaces or :;,' &quot; / |" />

                <div class="text-sm text-gray-400 mt-2">
                    <p class="font-semibold">Password must contain:</p>
                    <ul class="list-disc list-inside">
                        <li>8–20 characters</li>
                        <li>At least one uppercase letter (A–Z)</li>
                        <li>At least one lowercase letter (a–z)</li>
                        <li>At least one number (0–9)</li>
                        <li>At least one special character (e.g. @ $ ! % * ? & ^ + = _ -)</li>
                        <li><strong>No spaces</strong> or any of these characters: <code>: ; , ' " / |</code></li>
                    </ul>
                </div>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block mb-1 text-sm font-medium">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password"
                       class="w-full px-4 py-2 bg-[#1f1f1f] text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                       required />
            </div>

            <!-- Birthdate -->
            <div>
                <label for="birthdate" class="block mb-1 text-sm font-medium">Birthdate</label>
                <input id="birthdate" name="birthdate" type="date"
                       class="w-full px-4 py-2 bg-[#1f1f1f] text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                       required max="{{ now()->subYears(18)->format('Y-m-d') }}"
                       value="{{ old('birthdate') }}" />
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full py-2 px-4 font-semibold text-black bg-yellow-400 hover:bg-yellow-500 rounded-lg transition duration-200">
                Register
            </button>

            <p class="text-center text-sm text-gray-400 mt-3">
                Already have an account?
                <a href="{{ route('login') }}" class="text-yellow-400 hover:underline">Login here</a>.
            </p>
        </form>
    </div>
</div>
@endsection
