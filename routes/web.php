<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

//login
Route::get('/', [LoginController::class, 'index']);
Route::post('/a', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
//Route::post('/signin/{$nama_user,$password_user}',  'App\Http\Controllers\HomeController@index');


// Route::get('/tes/{id}',       'App\Http\Controllers\BarangController@tes');


// barang
Route::get ('/Home',                        'App\Http\Controllers\BarangController@index');
Route::get ('/Home1',                       'App\Http\Controllers\BarangController@index');
//input barang baru untuk 
Route::post('/create-Barang',               'App\Http\Controllers\BarangController@create');
Route::get ('/input-Barang',                'App\Http\Controllers\BarangController@insert');
//update barang untuk 
Route::get('/edit-Barang',            		'App\Http\Controllers\BarangController@edit');
Route::post('/update-Barang/{id}',          'App\Http\Controllers\BarangController@update');
//hapus barang untuk 
Route::get('/destroy-Barang/{id}',       	'App\Http\Controllers\BarangController@destroy');

// jenis barang
Route::get('/JenisBarang',                 'App\Http\Controllers\JenisBarangController@Index');
//input jenis barang baru untuk 
Route::post('/create-JenisBarang',         'App\Http\Controllers\JenisBarangController@create');
Route::get('/input-JenisBarang',           'App\Http\Controllers\JenisBarangController@insert');
//update jenis barang untuk 
Route::post('/edit-JenisBarang',      'App\Http\Controllers\BarangController@edit');
Route::get('/update-JenisBarang/{id}',     'App\Http\Controllers\BarangController@update');
//hapus jenis barang
Route::get('/destroy-JenisBarang/{id}', 	'App\Http\Controllers\JenisBarangController@destroy');

//pemesanan
Route::get('/Pemesanan',                    'App\Http\Controllers\PemesananController@index');
//input pemesanan 
Route::post('/create-Pemesanan',            'App\Http\Controllers\PemesananController@create');
Route::get('/input-Pemesanan',              'App\Http\Controllers\PemesananController@insert');
//update jenis barang untuk 
Route::post('/edit-Pemesanan/{id}',         'App\Http\Controllers\PemesananController@edit');
Route::get('/update-Pemesanan/{id}',        'App\Http\Controllers\PemesananController@update');
//hapus pemesanan
Route::get('/destroy-Pemesanan/{id}',       'App\Http\Controllers\PemesananController@destroy');

//User
Route::get('/User',            	 	        'App\Http\Controllers\UserController@index');
//input User 
Route::post('/create-User',              	'App\Http\Controllers\UserController@create');
Route::get('/input-User',               	'App\Http\Controllers\UserController@insert');
//update user untuk 
Route::post('/edit-User/{id}',          	'App\Http\Controllers\UserController@edit');
Route::get('/update-User/{id}',         	'App\Http\Controllers\UserController@update');
//hapus User
Route::get('/destroy-User/{id}',        	'App\Http\Controllers\UserController@destroy');

//Warna
Route::get('/Warna',                    	'App\Http\Controllers\WarnaController@index');
//input Warna 
Route::post('/create-Warna',            	'App\Http\Controllers\WarnaController@create');
Route::get('/input-Warna',              	'App\Http\Controllers\WarnaController@insert');
//update warna untuk 
Route::post('/edit-Warna/{id}',         	'App\Http\Controllers\WarnaController@edit');
Route::get('/update-Warna/{id}',        	'App\Http\Controllers\WarnaController@update');
//hapus Warna
Route::get('/destroy-Warna/{id}',       	'App\Http\Controllers\WarnaController@destroy');

//Ukuran
Route::get('/Ukuran',                   	'App\Http\Controllers\UkuranController@index');
//input Ukuran 
Route::post('/create-Ukuran',               'App\Http\Controllers\UkuranController@create');
Route::get('/input-Ukuran',             	'App\Http\Controllers\UkuranController@insert');
//update ukuran untuk 
Route::post('/edit-Ukuran/{id}',            'App\Http\Controllers\UkuranController@edit');
Route::get('/update-Ukuran/{id}',       	'App\Http\Controllers\UkuranController@update');
//hapus Ukuran
Route::get('/destroy-Ukuran/{id}',      	'App\Http\Controllers\UkuranController@destroy');

//Kota
Route::get('/Kota',                 		'App\Http\Controllers\KotaController@index');
//input Kota 
Route::post('/create-Kota',              	'App\Http\Controllers\KotaController@create');
Route::get('/input-Kota',               	'App\Http\Controllers\KotaController@store');
//update Kota untuk 
Route::get('/edit-Kota',          	'App\Http\Controllers\KotaController@edit');
Route::post('/update-Kota/{id}',     		'App\Http\Controllers\KotaController@update');
//hapus Kota
Route::get('/destroy-Kota/{id}',        	'App\Http\Controllers\KotaController@destroy');

//Role
Route::get('/Role',                 		'App\Http\Controllers\RoleController@index');
//input Role 
Route::post('/create-Role',              	'App\Http\Controllers\RoleController@create');
Route::get('/input-Role',               	'App\Http\Controllers\RoleController@insert');
//update Role untuk 
Route::post('/edit-Role/{id}',          	'App\Http\Controllers\RoleController@edit');
Route::get('/update-Role/{id}',     		'App\Http\Controllers\RoleController@update');
//hapus Role
Route::get('/destroy-Role/{id}',        	'App\Http\Controllers\RoleController@destroy');

//Supplier
Route::get('/Supplier',                 	'App\Http\Controllers\SupplierController@index');
//input Supplier 
Route::post('/create-Supplier',             'App\Http\Controllers\SupplierController@store');
Route::get('/input-Supplier',               'App\Http\Controllers\SupplierController@create');
//update Supplier untuk 
Route::get('/edit-Supplier/{id}',          'App\Http\Controllers\SupplierController@edit');
Route::post('/update-Supplier/{id}',     	'App\Http\Controllers\SupplierController@update');
//hapus Supplier
Route::get('/destroy-Supplier/{id}',        'App\Http\Controllers\SupplierController@destroy');

//Penerimaan
Route::get('/Penerimaan',                   'App\Http\Controllers\PenerimaanController@index');
//input Penerimaan 
Route::post('/create-Penerimaan',           'App\Http\Controllers\PenerimaanController@create');
Route::get('/input-Penerimaan',             'App\Http\Controllers\PenerimaanController@insert');
//update Penerimaan untuk 
Route::post('/edit-Penerimaan/{id}',        'App\Http\Controllers\PenerimaanController@edit');
Route::get('/update-Penerimaan/{id}',       'App\Http\Controllers\PenerimaanController@update');
//hapus Penerimaan
Route::get('/destroy-Penerimaan/{id}',      'App\Http\Controllers\PenerimaanController@destroy');

//Pembayaran
Route::get('/pembayaran',                   'App\Http\Controllers\PembayaranController@index');
//input Pembayaran 
Route::post('/create-Pembayaran',                'App\Http\Controllers\PembayaranController@create');
Route::get('/input-Pembayaran',             'App\Http\Controllers\PembayaranController@insert');
//update Pembayaran untuk 
Route::post('/edit-Pembayaran/{id}',            'App\Http\Controllers\PembayaranController@edit');
Route::get('/update-Pembayaran/{id}',       'App\Http\Controllers\PembayaranController@update');
//hapus Pembayaran
Route::get('/destroy-Pembayaran/{id}',      'App\Http\Controllers\PembayaranController@destroy');

//History Stock
Route::get('/HistoryStock',                 'App\Http\Controllers\HistoryStockController@index');
//input HistoryStock 
Route::post('/create-HistoryStock',              'App\Http\Controllers\HistoryStockController@create');
Route::get('/input-HistoryStock',               'App\Http\Controllers\HistoryStockController@insert');
//update HistoryStock untuk 
Route::post('/edit-HistoryStock/{id}',          'App\Http\Controllers\HistoryStockController@edit');
Route::get('/update-HistoryStock/{id}',     'App\Http\Controllers\HistoryStockController@update');
//hapus HistoryStock
Route::get('/destroy-HistoryStock/{id}',        'App\Http\Controllers\HistoryStockController@destroy');



