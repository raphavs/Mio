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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@invokeWelcome')->name('mio_welcome');
Route::get('/Information', 'PageController@invokeInformation')->name('welcome_info');
Route::get('/People', 'PageController@invokePeople')->name('welcome_people');
Route::get('/Features', 'PageController@invokeFeatures')->name('welcome_features');

Route::get('/Home', 'PageController@invokeHome')->name('mio_home')->middleware('auth');
Route::get('/MyProfile', 'PageController@invokeProfile')->name('home_profile');