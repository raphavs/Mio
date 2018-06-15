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
Route::get('/contact', 'WelcomeController@invokeContact')->name('welcome.contact');

Route::get('/home', 'HomeController@invokeHome')->name('mio.home');
Route::get('/home/{door}', 'HomeController@invokeManageDoor')->name('home.managedoor');
Route::get('/home/{door}/selectuser', 'HomeController@invokeSelectUser')->name('home.managedoor.selectuser');
Route::get('/home/{door}/selectuser/{user}', 'BP_AdjustController@invokeRights')->name('home.managedoor.selectuser.rights');
Route::post('/home/{door}/selectuser/{user}/ext', 'BP_AdjustController@invokeRightsExt')->name('home.managedoor.selectuser.rights.ext');
Route::post('/home', 'BP_AdjustController@store')->name('home.managedoor.selectuser.rights.ext.store');
Route::get('/home/{door}/transactions', 'BP_SearchController@showTransactions')->name('home.managedoor.transactions');
Route::get('/home/{door}/transactions/ajax', 'BP_SearchController@filterAJAX')->name('home.managedoor.transactions.ajax');
Route::get('/home/{door}/transactions/submitajax', 'BP_SearchController@submitFilterAJAX')->name('home.managedoor.transactions.submit.ajax');

Route::get('/login', 'WelcomeController@invokeLogin')->name('login');
Route::get('/register', 'WelcomeController@invokeRegister')->name('register');
Route::get('/login/reset', 'WelcomeController@invokeMail')->name('login.resetpw');

Route::get('/home/{door}/adduser','HomeController@addUser');
Route::post('/home/{door}/add','HomeController@add');
Route::get('/home/{door}/open','HomeController@open');