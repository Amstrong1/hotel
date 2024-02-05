<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app.welcome');
});

Route::get('/about', function () {
    return view('app.about');
});

Route::get('/room', function () {
    return view('app.room');
});

Route::get('/restaurant', function () {
    return view('app.restaurant');
});

Route::get('/contact', function () {
    return view('app.contact');
});
