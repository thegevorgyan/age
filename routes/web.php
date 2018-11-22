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

Route::get('/home', 'WebsitesController@index')->name('home');

Route::get('/destroy', 'WebsitesController@destroy')->name('destroy');

Route::get('/store', 'WebsitesController@store')->name('store');