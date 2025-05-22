<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighStakesTablesController extends Controller
{
    public function show()
    {
        return view('pages.homeContents.high-stakes-tables');
    }
}
