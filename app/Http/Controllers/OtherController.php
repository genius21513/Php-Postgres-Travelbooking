<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function terms()
    {
        return view('terms');
    }

    public function policy()
    {
        return view('policy');
    }
}
