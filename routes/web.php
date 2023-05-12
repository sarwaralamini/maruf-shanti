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

Route::get('about/holistic-escapes', function () {
    return view('frontend.about.holistic-escapes');
})->name('holistic-escapes');
Route::get('about/shanti-concept', function () {
    return view('frontend.about.shanti-concept');
})->name('shanti-concept');
Route::get('about/serenity-and-discovery', function () {
    return view('frontend.about.serenity-and-discovery');
})->name('serenity-and-discovery');
Route::get('history', function () {
    return view('frontend.about.history');
})->name('history');
Route::get('about/sustainability', function () {
    return view('frontend.about.sustainability');
})->name('sustainability');
Route::get('about/our-vision', function () {
    return view('frontend.about.our-vision');
})->name('our-vision');


//ACCOMMODATION ROUTES

Route::get('accommodation/villas', function () {
    return view('frontend.accommodation.villas');
})->name('villas');

Route::get('accommodation/villa-amenities', function () {
    return view('frontend.accommodation.villa-amenities');
})->name('villa-amenities');

Route::get('accommodation/resort-services-or-amenities', function () {
    return view('frontend.accommodation.resort-services-or-amenities');
})->name('resort-services-or-amenities');

Route::get('accommodation/make-it-romantic', function () {
    return view('frontend.accommodation.make-it-romantic');
})->name('make-it-romantic');

Route::get('accommodation/birthday-setup', function () {
    return view('frontend.accommodation.birthday-setup');
})->name('birthday-setup');

//WELLNESS ROUTES
Route::get('wellness/wellness-village', function () {
    return view('frontend.wellness.wellness-village');
})->name('wellness-village');

Route::get('wellness/activities', function () {
    return view('frontend.wellness.activities');
})->name('activities');

Route::get('wellness/spa-village', function () {
    return view('frontend.wellness.spa-village');
})->name('spa-village');

Route::get('wellness/spa-and-bath-menu', function () {
    return view('frontend.wellness.spa-and-bath-menu');
})->name('spa-and-bath-menu');

Route::get('healthy-living', function () {
    return view('frontend.healthy-living');
})->name('healthy-living');









