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

// home
Route::get('/', 'HomeController@index')->name('home');
// About-us
Route::get('/about', 'HomeController@about')->name('about-us');
// Search
Route::get('/search', 'HomeController@search')->name('search');
// Artist
Route::prefix('artist')->name('artist.')->group(function () {
    Route::get('/list', 'Page\ArtistController@list')->name('list');
    Route::get('/read', 'Page\ArtistController@read')->name('read');
});
// Genre
Route::prefix('genre')->name('genre.')->group(function () {
    Route::get('/list', 'Page\GenreController@list')->name('list');
    Route::get('/read', 'Page\GenreController@read')->name('read');
});
// Song
Route::prefix('song')->name('song.')->group(function () {
    Route::get('/list', 'Page\SongController@list')->name('list');
    Route::get('/read', 'Page\SongController@read')->name('read');
});

Auth::routes();

