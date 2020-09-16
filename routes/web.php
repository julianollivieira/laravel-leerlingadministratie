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

Route::get('/', function () {
    error_log(session('user'));
    return view('home', ['user' => session('user')]);
});

Route::get('/login', function () {
    return view('login', ['user' => session('user')]);
});


Route::get('/studenten', function () {
    return view('studenten', ['user' => session('user')]);
});
Route::get('/opleidingen', function () {
    return view('opleidingen', ['user' => session('user')]);
});
Route::get('/klassen', function () {
    return view('klassen', ['user' => session('user')]);
});
Route::get('/vakken', function () {
    return view('vakken', ['user' => session('user')]);
});
Route::get('/resultaten', function () {
    return view('resultaten', ['user' => session('user')]);
});
