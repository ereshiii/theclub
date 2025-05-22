<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function who()
    {
        return view('about.who');
    }

    public function mission()
    {
        return view('about.mission');
    }

    public function vision()
    {
        return view('about.vision');
    }
}
