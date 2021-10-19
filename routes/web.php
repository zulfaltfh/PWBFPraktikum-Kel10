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
Route::post('/signin/{$nama_user,$password_user}',	'App\Http\Controllers\HomeController@index');

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

//User
Route::get('/User_pegawai',						'App\Http\Controllers\UserController@home');
//input User 
Route::get('/create_User_pegawai',				'App\Http\Controllers\UserController@create');
Route::get('/input_User_pegawai',				'App\Http\Controllers\UserController@insert');
//update user untuk pegawai
Route::post('/edit_User_pegawai/{id}',			'App\Http\Controllers\UserController@edit');
Route::get('/update_User_pegawai/{id}',			'App\Http\Controllers\UserController@update');
//hapus User
Route::get('/destroy_User_pegawai/{id}',		'App\Http\Controllers\UserController@destroy');

//Warna
Route::get('/Warna_pegawai',					'App\Http\Controllers\WarnaController@home');
//input Warna 
Route::get('/create_Warna_pegawai',				'App\Http\Controllers\WarnaController@create');
Route::get('/input_Warna_pegawai',				'App\Http\Controllers\WarnaController@insert');
//update warna untuk pegawai
Route::post('/edit_Warna_pegawai/{id}',			'App\Http\Controllers\WarnaController@edit');
Route::get('/update_Warna_pegawai/{id}',		'App\Http\Controllers\WarnaController@update');
//hapus Warna
Route::get('/destroy_Warna_pegawai/{id}',		'App\Http\Controllers\WarnaController@destroy');

//Ukuran
Route::get('/Ukuran_pegawai',					'App\Http\Controllers\UkuranController@home');
//input Ukuran 
Route::get('/create_Ukuran_pegawai',				'App\Http\Controllers\UkuranController@create');
Route::get('/input_Ukuran_pegawai',				'App\Http\Controllers\UkuranController@insert');
//update ukuran untuk pegawai
Route::post('/edit_Ukuran_pegawai/{id}',			'App\Http\Controllers\UkuranController@edit');
Route::get('/update_Ukuran_pegawai/{id}',		'App\Http\Controllers\UkuranController@update');
//hapus Ukuran
Route::get('/destroy_Ukuran_pegawai/{id}',		'App\Http\Controllers\UkuranController@destroy');

//Kota
Route::get('/Kota_pegawai',					'App\Http\Controllers\KotaController@home');
//input Kota 
Route::get('/create_Kota_pegawai',				'App\Http\Controllers\KotaController@create');
Route::get('/input_Kota_pegawai',				'App\Http\Controllers\KotaController@insert');
//update Kota untuk pegawai
Route::post('/edit_Kota_pegawai/{id}',			'App\Http\Controllers\KotaController@edit');
Route::get('/update_Kota_pegawai/{id}',		'App\Http\Controllers\KotaController@update');
//hapus Kota
Route::get('/destroy_Kota_pegawai/{id}',		'App\Http\Controllers\KotaController@destroy');

//Role
Route::get('/Role_pegawai',					'App\Http\Controllers\RoleController@home');
//input Role 
Route::get('/create_Role_pegawai',				'App\Http\Controllers\RoleController@create');
Route::get('/input_Role_pegawai',				'App\Http\Controllers\RoleController@insert');
//update Role untuk pegawai
Route::post('/edit_Role_pegawai/{id}',			'App\Http\Controllers\RoleController@edit');
Route::get('/update_Role_pegawai/{id}',		'App\Http\Controllers\RoleController@update');
//hapus Role
Route::get('/destroy_Role_pegawai/{id}',		'App\Http\Controllers\RoleController@destroy');

//Supplier
Route::get('/Supplier_pegawai',					'App\Http\Controllers\SupplierController@home');
//input Supplier 
Route::get('/create_Supplier_pegawai',				'App\Http\Controllers\SupplierController@create');
Route::get('/input_Supplier_pegawai',				'App\Http\Controllers\SupplierController@insert');
//update Supplier untuk pegawai
Route::post('/edit_Supplier_pegawai/{id}',			'App\Http\Controllers\SupplierController@edit');
Route::get('/update_Supplier_pegawai/{id}',		'App\Http\Controllers\SupplierController@update');
//hapus Supplier
Route::get('/destroy_Supplier_pegawai/{id}',		'App\Http\Controllers\SupplierController@destroy');

//Penerimaan
Route::get('/Penerimaan_pegawai',					'App\Http\Controllers\PenerimaanController@home');
//input Penerimaan 
Route::get('/create_Penerimaan_pegawai',				'App\Http\Controllers\PenerimaanController@create');
Route::get('/input_Penerimaan_pegawai',				'App\Http\Controllers\PenerimaanController@insert');
//update Penerimaan untuk pegawai
Route::post('/edit_Penerimaan_pegawai/{id}',			'App\Http\Controllers\PenerimaanController@edit');
Route::get('/update_Penerimaan_pegawai/{id}',		'App\Http\Controllers\PenerimaanController@update');
//hapus Penerimaan
Route::get('/destroy_Penerimaan_pegawai/{id}',		'App\Http\Controllers\PenerimaanController@destroy');

//Pembayaran
Route::get('/Pembayaran_pegawai',					'App\Http\Controllers\PembayaranController@home');
//input Pembayaran 
Route::get('/create_Pembayaran_pegawai',				'App\Http\Controllers\PembayaranController@create');
Route::get('/input_Pembayaran_pegawai',				'App\Http\Controllers\PembayaranController@insert');
//update Pembayaran untuk pegawai
Route::post('/edit_Pembayaran_pegawai/{id}',			'App\Http\Controllers\PembayaranController@edit');
Route::get('/update_Pembayaran_pegawai/{id}',		'App\Http\Controllers\PembayaranController@update');
//hapus Pembayaran
Route::get('/destroy_Pembayaran_pegawai/{id}',		'App\Http\Controllers\PembayaranController@destroy');

//History Stock
Route::get('/HistoryStock_pegawai',					'App\Http\Controllers\HistoryStockController@home');
//input HistoryStock 
Route::get('/create_HistoryStock_pegawai',				'App\Http\Controllers\HistoryStockController@create');
Route::get('/input_HistoryStock_pegawai',				'App\Http\Controllers\HistoryStockController@insert');
//update HistoryStock untuk pegawai
Route::post('/edit_HistoryStock_pegawai/{id}',			'App\Http\Controllers\HistoryStockController@edit');
Route::get('/update_HistoryStock_pegawai/{id}',		'App\Http\Controllers\HistoryStockController@update');
//hapus HistoryStock
Route::get('/destroy_HistoryStock_pegawai/{id}',		'App\Http\Controllers\HistoryStockController@destroy');



//pemilik
Route::get('/homePemilik',							'App\Http\Controllers\HomePemilikController@Home');
Route::get('/databarang',							'App\Http\Controllers\HomePemilikController@barang');