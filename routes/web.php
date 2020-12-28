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
    return view('landing');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/landing-2', function () {
    return view('landing-2');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/laboratory', function () {
    return view('courses');
});



Route::get('/event', function () {
    return view('event.event');
});

Route::get('/event-detail', function () {
    return view('event.event-detail');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/subscription', function () {
    return view('subscription');
});
