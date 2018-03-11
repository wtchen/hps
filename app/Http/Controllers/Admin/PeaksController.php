<?php

namespace App\Http\Controllers\Admin;

use App\Peak;
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
        $postMessage = [];
        if ($request -> isMethod('post')) {
            $validatedData = $request -> validate([
                'name' => 'required|max:255',
                'serial' => 'required|unique:peaks|max:10',
                'elevation' => 'required'
            ]);
            $data = $validatedData + $request -> all();
            $peak = Peak::create($data);
            $postMessage['message'] = '<b>' . $peak['name'] . '</b> (' . $peak['serial'] . ') added';
        }
        return view('admin.peaks.add', ['name' => 'Add Peak'] + $postMessage);
    }
}
