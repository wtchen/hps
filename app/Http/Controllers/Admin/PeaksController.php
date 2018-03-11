<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class PeaksController extends AdminController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.peaks', ['name' => 'Peaks']);
    }

    public function add(Request $request)
    {
        return view('admin.peaks.add', ['name' => 'Add Peak']);
    }
}
