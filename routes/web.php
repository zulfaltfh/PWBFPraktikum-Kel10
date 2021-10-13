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

//login
Route::get('/',										'App\Http\Controllers\HomeController@Login');

//pegawai barang
Route::get ('/homePegawai',							'App\Http\Controllers\BarangController@Home');
//input barang baru untuk pegawai
Route::post('/create_barang_pegawai',				'App\Http\Controllers\BarangController@create');
Route::get ('/input_barang_pegawai',				'App\Http\Controllers\BarangController@insert');
//update barang untuk pegawai
Route::post('/edit_barang_pegawai/{id}',			'App\Http\Controllers\BarangController@edit');
Route::get('/update_barang_pegawai/{id}',			'App\Http\Controllers\BarangController@update');
//hapus barang untuk pegawai
Route::delete('/destroy_barang_pegawai/{id}',		'App\Http\Controllers\BarangController@destroy');

//pegawai jenis barang
Route::get('/Jenis_Barang_Pegawai',					'App\Http\Controllers\JenisBarangController@Home');
//input jenis barang baru untuk pegawai
Route::post('/create_jenis_barang_pegawai',			'App\Http\Controllers\JenisBarangController@create');
Route::get('/input_jenis_barang_pegawai',			'App\Http\Controllers\JenisBarangController@insert');
//update jenis barang untuk pegawai
Route::post('/edit_jenis_barang_pegawai/{id}',		'App\Http\Controllers\BarangController@edit');
Route::get('/update_jenis_barang_pegawai/{id}',		'App\Http\Controllers\BarangController@update');
//hapus jenis barang
Route::delete('/destroy_jenis_barang_pegawai/{id}',	'App\Http\Controllers\JenisBarangController@destroy');

//pemesanan
Route::get('/pemesanan_pegawai',					'App\Http\Controllers\PemesananController@home');
//input pemesanan 
Route::get('/create_pemesanan_pegawai',				'App\Http\Controllers\PemesananController@create');
Route::get('/input_pemesanan_pegawai',				'App\Http\Controllers\PemesananController@insert');
//update jenis barang untuk pegawai
Route::post('/edit_pemesanan_pegawai/{id}',			'App\Http\Controllers\PemesananController@edit');
Route::get('/update_pemesanan_pegawai/{id}',		'App\Http\Controllers\PemesananController@update');
//hapus pemesanan
Route::get('/destroy_pemesanan_pegawai/{id}',		'App\Http\Controllers\PemesananController@destroy');






//pemilik
Route::get('/homePemilik',							'App\Http\Controllers\HomePemilikController@Home');
Route::get('/databarang',							'App\Http\Controllers\HomePemilikController@barang');