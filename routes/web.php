<?php

use Illuminate\Support\Facades\Route;

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

Route::fallback(function () {
    return view('tabeisa.404');
});

Route::get('/', function () {
    return view('tabeisa.landing');
});

Route::get('/contact', function () {
    return view('tabeisa.contact');
});

Route::get('/who_are_we', function () {
    return view('tabeisa.about');
});

Route::get('/mission_vision', function () {
    return view('tabeisa.missionsVision');
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
