@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4 text-white">Search Results for "{{ $query }}"</h2>
    

    @forelse($results as $item)
        <div class="mb-6 bg-[#1e1e1e] p-4 rounded-lg border border-[#333] shadow-md">
            <a href="{{ $item->url }}" class="text-xl font-bold text-gold hover:underline">{{ $item->title }}</a>
            <p class="text-gray-400 mt-1">{{ $item->blurb }}</p>
            <span class="text-sm text-gray-500 italic">Keywords: {{ $item->keywords }}</span>
            <span class="text-sm text-gray-500">Match score: {{ $item->score }}</span>

        </div>
    @empty
        <p class="text-gray-400">No results found.</p>
    @endforelse
</div>
@endsection
