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

//Route::get('/', 'App\Http\Controllers\HomeController@Login');

Route::get('/', 'App\Http\Controllers\HomeController@Login');

Route::get('/home', 'App\Http\Controllers\HomeController@Home');
Route::get('/about', 'App\Http\Controllers\HomeController@About');
Route::get('/faq', 'App\Http\Controllers\HomeController@Faq');

