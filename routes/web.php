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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function () { return view('pages.guest.index'); });
Route::get('about.us', function (){ return view('pages.guest.about-us'); });
Route::get('log.in', function () { return view('pages.guest.log-in'); });


Route::get('sign.up', 'Auth\RegisterController@showSignUpForm');
Route::post('sign.up/{code?}', 'Auth\RegisterController@handleSignUpFormRequest')->name('users.sign.up');

Route::get('verification/email.do', 'Auth\RegisterController@showEmailVerificationForm')->name('email.verification.code');
Route::post('verification/email.do', 'Auth\RegisterController@handleEmailVerificationFormRequest')->name('email.verification.handle');

Route::get('users/register.do', 'Auth\RegisterController@showUserDetailsForm')->name('user.register');
Route::post('users/register.do', 'Auth\RegisterController@handleUserDetailsFormRequest')->name('user.register.handle');
Route::get('artists/request.do/{artist?}', 'Auth\LoginController@showRequestArtistForm')->name('artists.request');
Route::post('artists/request.do', 'Auth\LoginController@handleSearchArtistForm');
Route::get('artists/{qisimah_id}/management.details', 'Auth\LoginController@handleArtistManagementDetails')->name('artists.management.details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('artists', 'ArtistController');
Route::resource('songs', 'SongController');
Route::resource('Plays', 'PlayController');
