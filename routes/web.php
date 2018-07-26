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

Route::get('/', 'PortalController@home')->name('home');

// User route

Route::get('/user/login','UserController@login')->name('user.login');
Route::get('/user/logout','UserController@logout')->name('user.logout');
Route::post('/user/login','UserController@loginPost')->name('user.login.post');
Route::get('/user/register','UserController@register')->name('user.register');
Route::post('/user/register','UserController@registerPost')->name('user.register.post');

//Authenticated Link
Route::middleware(['auth'])->group(function(){
 	Route::get('/user','UserController@dashboard')->name('user.dashboard');
 	Route::resource('sesi','SesiController');
});