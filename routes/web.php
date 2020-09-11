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

Route::get('/students', function () {
    return view('students', ['user' => session('user')]);
});
