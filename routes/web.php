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


// Admin Area
Route::get(config('backend.backend_link'), 'AdministratorController@index');

Route::get('/login/admin', 'Auth\AdminLoginController@showAdminLoginForm')->name("login.admin");
 
Route::post('/login/admin', 'Auth\AdminLoginController@adminLogin')->name("admin.login");

Route::get("logout/admin", 'AdminLoginController@logout');


/* Manager Create */

Route::group(['prefix' => config("backend.backend_link"),  'middleware' => 'auth:web,admin'], function()
{
     Route::get("manager/data", "AdminManagerController@anyData")->name("manager.data");
    Route::resource('manager', 'AdminManagerController');
   
});

// Route::prefix('admin')->group(function () {
//     Route::resource('manager', 'AdminManagerController');
// });

// Manager Area
Route::get(config('backend.manager_link'), 'AdministratorController@index');

 Route::get('/login/manager', 'Auth\ManagerLoginController@showManagerLoginForm')->name("login.manager");
 
Route::post('/login/manager', 'Auth\ManagerLoginController@managerLogin')->name("manager.login");

Route::get("logout/manager", 'ManagerLoginController@logout');
