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



Route::get('/how-we-buy-houses', function () {
    return view('app.hwb_houses');
})->name("hwb_houses");

Route::get('/sell-my-house-fast-online-quote', function () {
    return view('app.smhf_online_quote');
})->name("smhf_online_quote");

Route::get('/about-us', function () {
    return view('app.about_us');
})->name("about_us");

Route::get('/leads', function () {
    return view('app.leads');
})->name("leads");

Route::get('/our-company', function () {
    return view('app.our_company');
})->name("our_company");

Route::get('/sell-my-condo-fast', function () {
    return view('app.smc_fast');
})->name("smc_fast");

Route::get('/we-buy-houses-canada', function () {
    return view('app.wbh_canada');
})->name("wbh_canada");

Route::get('/reviews', function () {
    return view('app.reviews');
})->name("reviews");

Route::get('/faq', function () {
    return view('app.faq');
})->name("faq");

Route::get('/contact-us', function () {
    return view('app.contact_us');
})->name("contact_us");

Route::get('/privacy', function () {
    return view('app.privacy');
})->name("privacy");



Route::get("/", [App\Http\Controllers\ServiceLocationController::class, 'home'])->name("home");
Route::get("/service/{slug}", [App\Http\Controllers\ServiceLocationController::class, 'location'])->name("service.location");;
