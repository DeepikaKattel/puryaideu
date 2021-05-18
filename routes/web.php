<?php

use Illuminate\Support\Facades\Route;

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

//authenticate different users
Route::post('login/customer', 'Auth\LoginController@loginCustomer');
Route::post('login/rider', 'Auth\LoginController@loginRider');
Route::post('login/admin', 'Auth\LoginController@loginAdmin');
Route::middleware(['approved'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
Route::middleware(['admin'])->group(function () {
    Route::get('/users_unapproved', 'UserController@unapproved')->name('admin.unapproved');
    Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.approve');

    Route::get('/users/destroy/{id}', 'UserController@destroy')->name('u.destroy');
});
Route::get('/approval', 'HomeController@approval')->name('approval');
Route::get('/admin/dashboard', 'HomeController@admin')->name('admin/dashboard');
Route::get('/admin/login', 'Auth\LoginController@admin')->name('admin/login');
Route::get('/rider/login', 'Auth\LoginController@rider')->name('rider/login');

Route::post('register/rider', 'RiderController@rider')->name('rider.register');
