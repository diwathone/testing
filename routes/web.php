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