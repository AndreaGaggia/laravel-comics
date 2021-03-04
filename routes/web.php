<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@home')->name('guest_home');
Route::get('comics/{comic}', 'PagesController@show')->name('guest_show');

// Route::get('guests', function () {
//     return view('layouts.guests');
// });

Auth::routes(['register' => false]);

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('comics', 'ComicController');
    Route::resource('writers', 'WriterController');
    Route::resource('illustrators', 'IllustratorController');
    Route::resource('articles', 'ArticleController');
    Route::resource('series', 'SerieController');
});
