<?php

namespace App\Http\Controllers;

use App\Models\SearchItem;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function results(Request $request)
    {
        $query = strtolower($request->input('q'));

        $bannedKeywords = ['spam', 'bao', 'tite', 'inappropriate', 'tanga'];

        $results = SearchItem::all()->map(function ($item) use ($query) {
            $score = 0;
            if (str_contains(strtolower($item->title), $query))
                $score += 3;
            if (str_contains(strtolower($item->blurb), $query))
                $score += 2;
            if (str_contains(strtolower($item->keywords), $query))
                $score += 5;
            $item->score = $score;
            return $item;
        })
            // Filter out items with banned keywords
            ->filter(function ($item) use ($bannedKeywords) {
                $haystack = strtolower($item->title . ' ' . $item->blurb . ' ' . $item->keywords);
                foreach ($bannedKeywords as $badWord) {
                    if (str_contains($haystack, $badWord)) {
                        return false; // Exclude item containing banned word
                    }
                }
                return true;
            })
            ->sortByDesc('score')
            ->filter(fn($item) => $item->score > 0);

        return view('search.results', [
            'results' => $results,
            'query' => $query
        ]);
    }
}
