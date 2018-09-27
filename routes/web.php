<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('welcome', function () { return view('pages.guest.index'); });
Route::get('about.us', function (){ return view('pages.guest.about-us'); });
Route::get('log.in', function () { return view('pages.guest.log-in'); });
Route::post('log.in', 'Auth\LoginController@authenticate');
Route::get('login', function () { return redirect()->to('log.in'); });
Route::get('password_reset', function () { return view('pages.guest.password-reset'); });


Route::get('sign.up', 'Auth\RegisterController@showSignUpForm');
Route::post('sign.up/{code?}', 'Auth\RegisterController@handleSignUpFormRequest')->name('users.sign.up');

Route::get('verification/email.do', 'Auth\RegisterController@showEmailVerificationForm')->name('email.verification.code');
Route::post('verification/email.do', 'Auth\RegisterController@handleEmailVerificationFormRequest')->name('email.verification.handle');

Route::get('users/register.do', 'Auth\RegisterController@showUserDetailsForm')->name('user.register');
Route::post('users/register.do', 'Auth\RegisterController@handleUserDetailsFormRequest')->name('user.register.handle');
Route::get('artists/request.do/{artist?}', 'Auth\LoginController@showRequestArtistForm')->name('artists.request');
Route::post('artists/request.do', 'Auth\LoginController@handleSearchArtistForm');
Route::get('artists/{qisimah_id}/management.details', 'Auth\LoginController@handleArtistManagementDetails')->name('artists.management.details');
Route::post('artists/{qisimah_id}/management.details', 'ArtistController@storeArtistManagementDetails')->name('artists.management.details.store');

Auth::routes();

Route::get('', 'HomeController@dashboard');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('artists/create/new', function (){ return view('pages.artists.suggest-artist-add'); });
Route::get('artists/edit', function (){ return view('pages.artists.artist-edit'); });
Route::get('artists/add', function (){ return view('pages.artists.artist-add'); });

Route::resources([
    'artists'   => 'ArtistController',
    'songs'     => 'SongController',
    'plays'     => 'PlayController',
    'albums'    => 'AlbumController',
    'broadcasters'  =>  'BroadcasterController',
    'youtubes' => 'YoutubeController',
    'artists.songs' =>  'ArtistSongController',
    'artists.instagrams' => 'ArtistInstagramController',
    'artists.youtube' => 'ArtistsYoutubeController',
    'countries.broadcasters' => 'CountryBroadcasterController'
]);

Route::name('reports.')->prefix('reports')->group( function (){
    Route::get('summary', 'ReportController@createSummary')->name('summary');
    Route::post('summary', 'ReportController@summary')->name('summary');
    Route::get('summary/{artist}/{country}/{song}/{from}/{to}', 'ReportController@getSummary')->name('get.summary');
    Route::get('compare/{my_artist?}/{other_artists?}', 'ReportController@compare')->name('compare');
    Route::get('general/{broadcaster?}/{artist?}/{song?}/{from?}/{to?}', 'ReportController@general')->name('general');
});

Route::get('broadcasters/create/{country}', 'BroadcasterController@getRegions');
Route::get('songs/{qisimah_id}/metadata', 'SongController@createMetaData')->name('songs.metadata');
Route::post('songs/{qisimah_id}/metadata', 'SongController@storeMetaData')->name('songs.metadata.update');

Route::get('link.youtube.account', 'SocializationController@linkYoutubeAccount');
Route::get('link.instagram.account', 'SocializationController@linkInstagramAccount');

Route::get('external/hooks/instagram', 'SocializationController@handleInstagramAuthentication');

Route::get('3rd-party/auth/google', 'ArtistsYoutubeController@handleYoutubeLoginResponse');

//Route::get('google/authorization', 'SocializationController@handleInstagramAuthentication');

Route::post('testicles', function (\Illuminate\Http\Request $request){
    $google = new \App\Google();
    $response = json_encode($request->all());
    return $google->handleGetYoutubeChannelActivities($response);
});
