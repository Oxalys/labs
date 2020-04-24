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

Route::resource("/", "WelcomeController");
Route::resource("/contact", "ContactController");
Route::resource("/services", "ServiceController");
Route::resource("/blog", "BlogController");




Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');




Route::get('/header', 'HeaderController@indexview')->name('header.edit');
Route::get('/overview', 'OverviewController@indexview')->name('overview.edit');
Route::get('/about', 'AboutController@indexview')->name('about.edit');
Route::get('/testi', 'TestiController@indexview')->name('testi.edit');
Route::get('/promo', 'PromoController@indexview')->name('promo.edit');
Route::get('/contactSection', 'ContactEditController@indexview')->name('contact.edit');
Route::get('/footer', 'FooterController@indexview')->name('footer.edit');


Route::resource("header","HeaderController");
Route::resource("about","AboutController");

