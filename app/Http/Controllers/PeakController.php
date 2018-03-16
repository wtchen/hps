<?php

namespace App\Http\Controllers;

use App\Peak;

class PeakController extends Controller
{
    public function index()
    {
        return view('guides', ['title' => 'Peak']);
    }
}
