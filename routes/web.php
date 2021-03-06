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
    return view('home.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/admission', function () {
    return view('home.admission');
});

Route::get('/admissionlist', function () {
    return view('home.admission_list');
});

Route::get('/academics', function () {
    return view('home.academics');
});

Route::get('/academicslist', function () {
    return view('home.academics_list');
});

