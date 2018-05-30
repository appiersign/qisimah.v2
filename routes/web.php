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

Route::get('welcome', function () {
    return view('pages.guest.index');
});

Route::get('about.us', function (){
    return view('pages.guest.about-us');
});

Route::get('log.in', function () {
    return view('pages.guest.log-in');
});

Auth::routes();

Route::post('email.verify', function (){
    return 'verification email sent';
});


Route::get('sign.up', function (){
    return 'User Registration';
});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('artists', 'ArtistController');
Route::resource('songs', 'SongController');
Route::resource('Plays', 'PlayController');
