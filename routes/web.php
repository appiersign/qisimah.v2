<?php

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

use Illuminate\Support\Facades\Route;

Route::get('welcome', function () { return view('pages.guest.index'); });
Route::get('about.us', function (){ return view('pages.guest.about-us'); });
Route::get('log.in', function () { return view('pages.guest.log-in'); });
Route::get('sign.up', function () { return view('pages.guest.sign-up'); });
Route::get('verification/email.do', function () { return view('pages.guest.email-verification'); })->name('email.verification.code');
Route::get('users/register.do', function () { return view('pages.guest.user-details'); })->name('user.register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('artists', 'ArtistController');
Route::resource('songs', 'SongController');
Route::resource('Plays', 'PlayController');
