<?php

namespace App\Http\Controllers;

use App\Peak;
use App\Region;

class ListController extends Controller
{
    public function index()
    {
        $peaks = Peak::orderBy('region_id')->get();
        $regions = Region::all();

        return view('hpslist', ['title' => 'Peak List', 'peaks' => $peaks, 'regions' => $regions]);
    }
}
