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
Route::match(['get', 'post'], '/admin/peaks/add', 'Admin\PeaksController@add')->name('admin.peaks.add');
Route::get('/admin/peaks/delete/{serial}', 'Admin\PeaksController@deletePage')->name('admin.peaks.deletePage');
Route::post('/admin/peaks/delete', 'Admin\PeaksController@delete')->name('admin.peaks.delete');
Route::get('/admin/peaks/edit/{serial}', 'Admin\PeaksController@editPage')->name('admin.peaks.editPage');
Route::post('/admin/peaks/save', 'Admin\PeaksController@save')->name('admin.peaks.save');
