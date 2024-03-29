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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('auth/{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');

Route::get('materi', function(){
    return view('materi'); // Your Blade template name
});
