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

// Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@Login');

Route::get('/home'		    	,'App\Http\Controllers\HomeController@Home');
Route::get('/about'		    	,'App\Http\Controllers\HomeController@About');
Route::post('/create'	    	,'App\Http\Controllers\BarangController@create');
Route::post('/insert_barang'	,'App\Http\Controllers\BarangController@insert');




