@extends('layouts.app')

@section('title', 'Search')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <form action="{{ route('search.results') }}" method="GET" class="flex items-center gap-2">
        <input type="text" name="q" placeholder="Search..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-gold focus:outline-none">
        <button type="submit" class="px-4 py-2 bg-gold text-black rounded-lg">Search</button>
    </form>
</div>
@endsection
