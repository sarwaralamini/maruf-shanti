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
    return view('frontend.index');
})->name('homepage');

//ABOUT ROUTES

Route::get('holistic-escapes', function () {
    return view('frontend.about.holistic-escapes');
})->name('holistic-escapes');
Route::get('shanti-concept', function () {
    return view('frontend.about.shanti-concept');
})->name('shanti-concept');
Route::get('serenity-and-discovery', function () {
    return view('frontend.about.serenity-and-discovery');
})->name('serenity-and-discovery');
Route::get('history', function () {
    return view('frontend.about.history');
})->name('history');
Route::get('sustainability', function () {
    return view('frontend.about.sustainability');
})->name('sustainability');
Route::get('our-vision', function () {
    return view('frontend.about.our-vision');
})->name('our-vision');


