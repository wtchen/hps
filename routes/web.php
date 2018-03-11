<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/aboutus', 'aboutus');

Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::get('/admin/peaks', 'Admin\PeaksController@index')->name('admin.peaks');
Route::get('/admin/peaks/add', 'Admin\PeaksController@add')->name('admin.peaks.add');
Route::post('/admin/peaks/add', 'Admin\PeaksController@add')->name('admin.peaks.add');
