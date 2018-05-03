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

Route::get('/', 'WelcomeController@invokeWelcome')->name('mio_welcome');
Route::get('/information', 'WelcomeController@invokeInformation')->name('welcome_info');
Route::get('/people', 'WelcomeController@invokePeople')->name('welcome_people');
Route::get('/features', 'WelcomeController@invokeFeatures')->name('welcome_features');

Route::get('/home', 'HomeController@invokeHome')->name('mio_home');
Route::get('/myprofile', 'HomeController@invokeProfile')->name('home_profile');

Route::get('/login', 'WelcomeController@invokeLogin')->name('login');
Route::get('/register', 'WelcomeController@invokeRegister')->name('register');