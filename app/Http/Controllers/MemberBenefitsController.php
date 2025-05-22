<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberBenefitsController extends Controller
{
    public function show()
    {
        return view('pages.homeContents.member-benefits');
    }
}
