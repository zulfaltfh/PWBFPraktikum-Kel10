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
//pegawai
Route::get('/homePegawai','App\Http\Controllers\HomeController@Home');

//input pemesanan
Route::get('/input_pemesanan_pegawai','App\Http\Controllers\HomeController@About');

//input barang baru untuk pegawai
Route::post('/create','App\Http\Controllers\BarangController@create');
Route::get('/input_barangpegawai','App\Http\Controllers\BarangController@insert');

//pemilik
Route::get('/homePemilik','App\Http\Controllers\HomePemilikController@Home');
Route::get('/databarang','App\Http\Controllers\HomePemilikController@barang');


