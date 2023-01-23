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

// This route display memory usage 18MB in Laravel Debugger [FRESH INSTALLATION]
Route::get('/', function () {
    return view('welcome');
});

// This route display memory usage 18MB in Laravel Debugger [FRESH INSTALLATION]
Route::get('/blank', function () {
    return view('home');
});

// This route display memory usage 18MB in Laravel Debugger [FRESH INSTALLATION]
Route::get('/block', function () {
    return view('demo');
});
