<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveTournamentsController extends Controller
{
    public function show()
    {
        return view('pages.homeContents.live-tournaments');
    }
}
