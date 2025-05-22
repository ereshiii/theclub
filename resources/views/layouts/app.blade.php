<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Poker Club')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("images/poker-bg.jpg") }}');
            background-size: cover;
            background-position: center;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen bg-black bg-opacity-90 text-white font-sans">
    
    <!-- Navbar -->
   <nav class="flex items-center justify-between p-4 bg-gray-900 text-white shadow">
    <div class="flex items-center space-x-6">
        <a href="{{ route('home') }}" class="text-xl font-bold text-gold hover:text-yellow-300">PokerSite</a>
        <ul class="flex space-x-4 text-sm">
            <li><a href="{{ route('home') }}" class="hover:text-gold transition">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-gold transition">About</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-gold transition">Contact</a></li>
            <li><a href="{{ route('gallery') }}" class="hover:text-gold transition">Gallery</a></li>
            @auth
                <li><a href="{{ route('dashboard') }}" class="hover:text-gold transition">Dashboard</a></li>
            @endauth
        </ul>
    </div>

    <div class="flex items-center space-x-4">
        <!-- 🔍 Search Form -->
        <form action="{{ route('search.results') }}" method="GET" class="flex items-center">
            <label for="search" class="sr-only">Search</label>
            <input id="search" type="text" name="q" placeholder="Search..."
                class="px-3 py-1 rounded bg-gray-800 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-gold"
            >
            <button type="submit"
                class="ml-2 px-3 py-1 bg-gold text-black font-semibold rounded hover:bg-yellow-400 transition">
                🔍
            </button>
        </form>

        <!-- 🔐 Authentication Links -->
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="hover:text-red-400 transition">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="hover:text-gold transition">Login</a>
            <a href="{{ route('register') }}" class="hover:text-gold transition">Register</a>
        @endauth
    </div>
</nav>


    <!-- Main Content -->
    <main class="py-10 px-6 container mx-auto">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black bg-opacity-80 text-center text-sm py-4 text-gray-400 mt-12 border-t border-red-800">
        &copy; {{ date('Y') }} Poker Club. All rights reserved.
    </footer>

    <!-- Custom Colors -->
    <style>
        .text-gold {
            color: #FFD700;
        }
        .hover\:text-gold:hover {
            color: #FFD700;
        }
    </style>
</body>
</html>
