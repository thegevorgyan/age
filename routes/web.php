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

Route::get('/websites', 'WebsitesController@index')->name('websites');

Route::get('/destroy', 'WebsitesController@destroy')->name('destroy');

Route::get('/destroy', 'WebsitesController@destroy')->name('destroy');

Route::get('/store', 'WebsitesController@store')->name('store');

Route::get('/check', 'CheckController@check')->name('check');

