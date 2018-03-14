<?php

namespace App\Http\Controllers\Admin;

use App\Peak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
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
        $peaks = Peak::orderBy('region_id') -> get();
        return view('admin.peaks', ['title' => 'Manage Peaks']) -> with('peaks', $peaks);
    }

    public function add(Request $request)
    {
        if ($request -> isMethod('post')) {
            $validatedData = $request -> validate([
                'name' => 'required|max:255',
                'serial' => 'required|unique:peaks|max:10',
                'elevation' => 'required'
            ]);
            $data = $validatedData + $request -> all();
            $peak = Peak::create($data);
            return Redirect::route('admin.peaks') -> with('status', '<b>' . $peak['name'] . '</b> (' . $peak['serial'] . ') added');
        }
        return view('admin.peaks.edit', ['title' => 'Add Peak']);
    }

    public function deletePage($serial)
    {
        $peak = Peak::where('serial', $serial) -> first();
        return view('admin.peaks.delete', ['title' => 'Delete Peak', 'peak' => $peak]);
    }

    public function delete(Request $request) {
        $validatedData = $request -> validate([
            'serial' => 'required|unique:peaks|max:10'
        ]);
        $data = $validatedData;
        $peak = Peak::where('serial', $data['serial']) -> delete();
        return Redirect::route('admin.peaks') -> with('status', '<b>' . $peak['name'] . '</b> (' . $peak['serial'] . ') deleted!');
    }

    public function editPage($serial)
    {
        $peak = Peak::where('serial', $serial) -> first();
        return view('admin.peaks.edit', ['title' => 'Edit ' . $peak -> name, 'peak' => $peak, 'post' => 'admin.peaks.save']);
    }

    public function save(Request $request) {
        $validatedData = $request -> validate([
            'name' => 'required|max:255',
            'serial' => 'required|max:10',
            'elevation' => 'required'
        ]);
        $data = $validatedData + $request -> all();
        $peak = Peak::where('serial', $data['serial']) -> first() -> fill($data);
        $peak -> save();
        return Redirect::route('admin.peaks') -> with('status', '<b>' . $peak['name'] . '</b> (' . $peak['serial'] . ') updated');
    }
}
