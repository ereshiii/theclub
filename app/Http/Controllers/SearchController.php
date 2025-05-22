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
        })->sortByDesc('score')->filter(fn($item) => $item->score > 0);

        return view('search.results', [
            'results' => $results,
            'query' => $query
        ]);
    }

}
