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

Route::get('/', 'WelcomeController@invokeWelcome')->name('mio.welcome');
Route::get('/information', 'WelcomeController@invokeInformation')->name('welcome.info');
Route::get('/people', 'WelcomeController@invokePeople')->name('welcome.people');
Route::get('/features', 'WelcomeController@invokeFeatures')->name('welcome.features');

Route::get('/home', 'HomeController@invokeHome')->name('mio.home');
Route::get('/home/myprofile', 'HomeController@invokeProfile')->name('home.profile');
Route::get('/home/{door}', 'HomeController@invokeManageDoor')->name('home.managedoor');
Route::get('/home/{door}/selectuser', 'HomeController@invokeSelectUser')->name('home.managedoor.selectuser');
Route::get('/home/{door}/selectuser/{user}', 'HomeController@invokeRights')->name('home.managedoor.selectuser.rights');
Route::get('/home/{door}/selectuser/{user}/ext', 'HomeController@invokeRightsExt')->name('home.managedoor.selectuser.rights.ext');
Route::get('/home/{door}/transactions', 'BP_SearchController@showTransactions')->name('home.managedoor.transactions');

Route::get('/login', 'WelcomeController@invokeLogin')->name('login');
Route::get('/register', 'WelcomeController@invokeRegister')->name('register');
Route::get('/login/reset', 'WelcomeController@invokeMail')->name('login.resetpw');