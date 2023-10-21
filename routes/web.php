<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    dd("Done");
});
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

Route::get('wellness/sweat-lounge', function () {
    return view('frontend.wellness.sweat-lounge');
})->name('sweat-lounge');

Route::get('wellness/packages', function () {
    return view('frontend.wellness.packages');
})->name('packages');

Route::get('wellness/healthy-living', function () {
    return view('frontend.wellness.healthy-living');
})->name('healthy-living');

Route::get('events-meetings/celebrate', function () {
    return view('frontend.events-meetings.celebrate');
})->name('celebrate');

Route::get('events-meetings/meeting-wellness-team-building-for-company', function () {
    return view('frontend.events-meetings.meeting-wellness-team-building-for-company');
})->name('meeting-wellness-team-building-for-company');

Route::get('events-meetings/wedding-in-shanti', function () {
    return view('frontend.events-meetings.wedding-in-shanti');
})->name('wedding-in-shanti');

Route::get('events-meetings/prenup-packages', function () {
    return view('frontend.events-meetings.prenup-packages');
})->name('prenup-packages');

Route::get('dining/private-dining', function () {
    return view('frontend.dining.private-dining');
})->name('dining.private-dining');

Route::get('dining/private-dining/food-menu', function () {
    return view('frontend.dining.private-dining-food-menu');
})->name('dining.private-dining.food-menu');

Route::get('dining/romantic-dining', function () {
    return view('frontend.dining.romantic-dining');
})->name('dining.romantic-dining');

Route::get('dining/bohemian-dining', function () {
    return view('frontend.dining.bohemian-dining');
})->name('dining.bohemian-dining');

Route::get('dining/glam-picnic', function () {
    return view('frontend.dining.glam-picnic');
})->name('dining.glam-picnic');

Route::get('contact/location', function () {
    return view('frontend.contact.location');
})->name('contact.location');

Route::get('contact/contact-us', function () {
    return view('frontend.contact.contact-us');
})->name('contact.contact-us');

Route::post('contact/contact-us', [ContactController::class, 'contactSubmit'])->name('contact-send');

Route::get('nearby-attractions', function () {
    return view('frontend.nearby-attractions');
})->name('nearby-attractions');

//FOOTER ROUTS
Route::get('payments', function () {
    return view('frontend.footer.payments');
})->name('footer.payment');

Route::get('privacy-policy', function () {
    return view('frontend.footer.privacy-policy');
})->name('footer.privacy-policy');

Route::get('refund-and-cancellation-policy', function () {
    return view('frontend.footer.refund-and-cancellation-policy-2');
})->name('footer.refund-and-cancellation-policy');

Route::get('sitemap', function () {
    return view('frontend.footer.sitemap');
})->name('footer.sitemap');

Route::get('work-with-us', function () {
    return view('frontend.footer.work-with-us');
})->name('footer.work-with-us');

Route::get('partner-with-us', function () {
    return view('frontend.footer.partner-with-us');
})->name('footer.partner-with-us');

Route::get('shanti-academy', function () {
    return view('frontend.footer.shanti-academy');
})->name('footer.shanti-academy');





















