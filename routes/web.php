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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', 'App\Http\Controllers\HomeController@Login');
//pegawai
Route::get('/homePegawai','App\Http\Controllers\HomeController@Home');

//input pemesanan
Route::get('/input_pemesanan_pegawai','App\Http\Controllers\HomeController@About');

//input barang baru untuk pegawai
Route::post('/create','App\Http\Controllers\BarangController@create');
Route::get('/input_barang_pegawai','App\Http\Controllers\BarangController@insert');

//update barang untuk pegawai
Route::get('/update_barang_pegawai','App\Http\Controllers\BarangController@update');

//hapus barang untuk pegawai
Route::delete('/destroy_barang_pegawai/{id}','App\Http\Controllers\BarangController@delete');

//pemilik
Route::get('/homePemilik','App\Http\Controllers\HomePemilikController@Home');
Route::get('/databarang','App\Http\Controllers\HomePemilikController@barang');