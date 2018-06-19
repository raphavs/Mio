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

Route::get('/login', 'WelcomeController@invokeLogin')->name('login');
Route::get('/register', 'WelcomeController@invokeRegister')->name('register');
Route::get('/login/reset', 'WelcomeController@invokeMail')->name('login.resetpassword');

Route::get('/home', 'HomeController@invokeHome')->name('mio.home');
Route::post('/home', 'HomeController@addDoor')->name('home.add.door');
Route::get('/home/{door}', 'HomeController@invokeManageDoor')->name('home.managedoor');
Route::get('/home/{door}/selectuser', 'HomeController@invokeSelectUser')->name('home.managedoor.selectuser');
Route::get('/home/{door}/selectuser/{user}', 'BP_AdjustController@invokeRights')->name('home.managedoor.selectuser.rights');
Route::post('/home/{door}/selectuser/{user}/ext', 'BP_AdjustController@invokeRightsExt')->name('home.managedoor.selectuser.rights.ext');
Route::get('/home/{door}/selectuser/{user}/ext', function ($door, $user)
    {
        return redirect("/home/$door/selectuser/$user");
    }
)->name('home.managedoor.selectuser.rights.redirect');
Route::post('/home/{door}/selectuser', 'BP_AdjustController@store')->name('home.managedoor.selectuser.rights.ext.store');

Route::get('/home/{door}/transactions', 'BP_SearchController@showTransactions')->name('home.managedoor.transactions');
Route::get('/home/{door}/transactions/ajax', 'BP_SearchController@filterAJAX')->name('home.managedoor.transactions.ajax');
Route::get('/home/{door}/transactions/submitajax', 'BP_SearchController@submitFilterAJAX')->name('home.managedoor.transactions.submitajax');

Route::get('/home/{door}/adduser', 'AddUserController@addUser')->name('home.managedoor.adduser');
Route::post('home/{door}', 'AddUserController@storeUser')->name('home.managedoor.storeuser');

Route::get('/admin', 'AdminController@manage')->name('home.admin');
Route::post('/admin', 'AdminController@deleteUser')->name('home.admin.deleteuser');
Route::get('/admin/{user}', 'AdminController@manageClient')->name('home.admin.client');
Route::post('/admin/{user}', 'AdminController@delete')->name('home.admin.client.deletedoor');

Route::get('/home/{door}/open', 'HomeController@open')->name('home.managedoor.open');