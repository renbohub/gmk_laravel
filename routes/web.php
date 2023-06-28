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

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index')->name('login-main');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@post')->name('login-action');
Route::get('/signup', 'App\Http\Controllers\Auth\SignupController@index')->name('signup-main');
Route::post('/signup', 'App\Http\Controllers\Auth\SignupController@post')->name('signup-action');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout-action');



Route::group(['middleware' => ['CheckSession']], function(){
    // Protected routes here
    Route::get('/', 'App\Http\Controllers\Main\DashboardController@index')->name('dashboard');
    Route::get('/power-monitoring', 'App\Http\Controllers\Main\DashboardController@pm')->name('pm-dashboard');
    Route::get('/production-dashboard', 'App\Http\Controllers\Main\DashboardController@prod')->name('prod-dashboard');

    Route::get('/production-dashboard/{token}', 'App\Http\Controllers\Main\DashboardController@prodDetail')->name('prod-dashboard-detail');
    Route::post('/production-dashboard/{token}', 'App\Http\Controllers\Main\DashboardController@prodDetailEdit')->name('edit-detail-action');

    // Post HMI device
    Route::post('/production-dashboard', 'App\Http\Controllers\Main\DashboardController@addHmi')->name('add-device');
    


    //404
    Route::get('/404', 'App\Http\Controllers\Main\ErrorController@e404')->name('404');
});