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

Route::get('linkedin', function () {
    return view('loginlinkedin');
});
Auth::routes();

Route::get('/redirect', 'SocialAuthLinkedinController@redirect');
Route::get('/callback', 'SocialAuthLinkedinController@callback');

Route::get('/home', 'HomeController@index')->name('home');