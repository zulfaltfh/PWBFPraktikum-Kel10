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
Route::get('/relog', [LoginController::class, 'index1']);
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

// Detail Barang
Route::get('/DetailBarang',                 	'App\Http\Controllers\DetailBarangController@Index');
//input jenis barang baru untuk 
Route::post('/create-DetailBarang',         	'App\Http\Controllers\DetailBarangController@create');
Route::get('/input-DetailBarang',           	'App\Http\Controllers\DetailBarangController@insert');
//update jenis barang untuk 
Route::get('/edit-DetailBarang',      		'App\Http\Controllers\BarangController@edit');
Route::post('/update-DetailBarang/{id}',     'App\Http\Controllers\BarangController@update');
//hapus jenis barang
Route::get('/destroy-DetailBarang/{id}', 	'App\Http\Controllers\JenisBarangController@destroy');

// jenis barang
Route::get('/JenisBarang',                 	'App\Http\Controllers\JenisBarangController@Index');
//input jenis barang baru untuk 
Route::post('/create-JenisBarang',         	'App\Http\Controllers\JenisBarangController@create');
Route::get('/input-JenisBarang',           	'App\Http\Controllers\JenisBarangController@insert');
//update jenis barang untuk 
Route::get('/edit-JenisBarang',      		'App\Http\Controllers\BarangController@edit');
Route::post('/update-JenisBarang/{id}',     'App\Http\Controllers\BarangController@update');
//hapus jenis barang
Route::get('/destroy-JenisBarang/{id}', 	'App\Http\Controllers\JenisBarangController@destroy');

//pemesanan
Route::get('/Pemesanan',                    'App\Http\Controllers\PemesananController@index');
Route::get('/statuspemesanan/{id}',         'App\Http\Controllers\PemesananController@status');
//input pemesanan 
Route::post('/create-Pemesanan',            'App\Http\Controllers\PemesananController@create');
Route::get('/input-Pemesanan',              'App\Http\Controllers\PemesananController@insert');
//update jenis barang untuk 
Route::get('/edit-Pemesanan',         		'App\Http\Controllers\PemesananController@edit');
Route::post('/update-Pemesanan/{id}',       'App\Http\Controllers\PemesananController@update');
//hapus pemesanan
Route::get('/destroy-Pemesanan/{id}',       'App\Http\Controllers\PemesananController@destroy');

//Detail Pemesanan
Route::get('/DetailPemesanan',              'App\Http\Controllers\DetailPemesananController@index');
//input DetailPemesanan 
Route::post('/create-DetailPemesanan',      'App\Http\Controllers\DetailPemesananController@create');
Route::get('/input-DetailPemesanan',        'App\Http\Controllers\DetailPemesananController@insert');
//update jenis barang untuk 
Route::get('/edit-DetailPemesanan',         'App\Http\Controllers\DetailPemesananController@edit');
Route::post('/update-DetailPemesanan/{id}', 'App\Http\Controllers\DetailPemesananController@update');
//hapus DetailPemesanan
Route::get('/destroy-DetailPemesanan/{id}', 'App\Http\Controllers\DetailPemesananController@destroy');


//User
Route::get('/User',            	 	        'App\Http\Controllers\UserController@index');
//input User 
Route::post('/create-User',              	'App\Http\Controllers\UserController@create');
Route::get('/input-User',               	'App\Http\Controllers\UserController@insert');
//update user untuk 
Route::get('/edit-User',		          	'App\Http\Controllers\UserController@edit');
Route::post('/update-User/{id}',         	'App\Http\Controllers\UserController@update');
//hapus User
Route::get('/destroy-User/{id}',        	'App\Http\Controllers\UserController@destroy');

//Warna
Route::get('/Warna',                    	'App\Http\Controllers\WarnaController@index');
//input Warna 
Route::post('/create-Warna',            	'App\Http\Controllers\WarnaController@create');
Route::get('/input-Warna',              	'App\Http\Controllers\WarnaController@insert');
//update warna untuk 
Route::get('/edit-Warna',         			'App\Http\Controllers\WarnaController@edit');
Route::post('/update-Warna/{id}',        	'App\Http\Controllers\WarnaController@update');
//hapus Warna
Route::get('/destroy-Warna/{id}',       	'App\Http\Controllers\WarnaController@destroy');

//Ukuran
Route::get('/Ukuran',                   	'App\Http\Controllers\UkuranController@index');
//input Ukuran 
Route::post('/create-Ukuran',               'App\Http\Controllers\UkuranController@create');
Route::get('/input-Ukuran',             	'App\Http\Controllers\UkuranController@insert');
//update ukuran untuk 
Route::get('/edit-Ukuran',            		'App\Http\Controllers\UkuranController@edit');
Route::post('/update-Ukuran/{id}',       	'App\Http\Controllers\UkuranController@update');
//hapus Ukuran
Route::get('/destroy-Ukuran/{id}',      	'App\Http\Controllers\UkuranController@destroy');

//Kota
Route::get('/Kota',                 		'App\Http\Controllers\KotaController@index');
//input Kota 
Route::post('/create-Kota',              	'App\Http\Controllers\KotaController@create');
Route::get('/input-Kota',               	'App\Http\Controllers\KotaController@store');
//update Kota untuk 
Route::get('/edit-Kota',          			'App\Http\Controllers\KotaController@edit');
Route::post('/update-Kota',     			'App\Http\Controllers\KotaController@update');
//hapus Kota
Route::get('/destroy-Kota/{id}',        	'App\Http\Controllers\KotaController@destroy');

//Role
Route::get('/Role',                 		'App\Http\Controllers\RoleController@index');
//input Role 
Route::post('/create-Role',              	'App\Http\Controllers\RoleController@create');
Route::get('/input-Role',               	'App\Http\Controllers\RoleController@insert');
//update Role untuk 
Route::get('/edit-Role',          			'App\Http\Controllers\RoleController@edit');
Route::post('/update-Role/{id}',     		'App\Http\Controllers\RoleController@update');
//hapus Role
Route::get('/destroy-Role/{id}',        	'App\Http\Controllers\RoleController@destroy');

//Supplier
Route::get('/Supplier',                 	'App\Http\Controllers\SupplierController@index');
//input Supplier 
Route::post('/create-Supplier',             'App\Http\Controllers\SupplierController@store');
Route::get('/input-Supplier',               'App\Http\Controllers\SupplierController@create');
//update Supplier untuk 
Route::get('/edit-Supplier',          		'App\Http\Controllers\SupplierController@edit');
Route::post('/update-Supplier/{id}',     	'App\Http\Controllers\SupplierController@update');
//hapus Supplier
Route::get('/destroy-Supplier/{id}',        'App\Http\Controllers\SupplierController@destroy');

//Penerimaan
Route::get('/Penerimaan',                   'App\Http\Controllers\PenerimaanController@index');
//input Penerimaan 
Route::post('/create-Penerimaan',           'App\Http\Controllers\PenerimaanController@create');
Route::get('/input-Penerimaan',             'App\Http\Controllers\PenerimaanController@insert');
//update Penerimaan untuk 
Route::get('/edit-Penerimaan',        		'App\Http\Controllers\PenerimaanController@edit');
Route::post('/update-Penerimaan/{id}',      'App\Http\Controllers\PenerimaanController@update');
//hapus Penerimaan
Route::get('/destroy-Penerimaan/{id}',      'App\Http\Controllers\PenerimaanController@destroy');

//Detail DetailPenerimaan
Route::get('/DetailPenerimaan',             'App\Http\Controllers\DetailPenerimaanController@index');
//input DetailPenerimaan 
Route::post('/create-DetailPenerimaan',     'App\Http\Controllers\DetailPenerimaanController@create');
Route::get('/input-DetailPenerimaan',       'App\Http\Controllers\DetailPenerimaanController@insert');
//update DetailPenerimaan untuk 
Route::get('/edit-DetailPenerimaan',        'App\Http\Controllers\DetailPenerimaanController@edit');
Route::post('/update-DetailPenerimaan/{id}','App\Http\Controllers\DetailPenerimaanController@update');
//hapus DetailPenerimaan
Route::get('/destroy-DetailPenerimaan/{id}','App\Http\Controllers\DetailPenerimaanController@destroy');

//Pembayaran
Route::get('/Pembayaran',                   'App\Http\Controllers\PembayaranController@index');
//input Pembayaran 
Route::post('/create-Pembayaran',           'App\Http\Controllers\PembayaranController@create');
Route::get('/input-Pembayaran',             'App\Http\Controllers\PembayaranController@insert');
//update Pembayaran untuk 
Route::get('/edit-Pembayaran',            	'App\Http\Controllers\PembayaranController@edit');
Route::post('/update-Pembayaran/{id}',      'App\Http\Controllers\PembayaranController@update');
//hapus Pembayaran
Route::get('/destroy-Pembayaran/{id}',      'App\Http\Controllers\PembayaranController@destroy');

//History Stock
Route::get('/HistoryStock',                 'App\Http\Controllers\HistoryStockController@index');
//input HistoryStock 
Route::get('/create-HistoryStock',          'App\Http\Controllers\HistoryStockController@create');
Route::get('/input-HistoryStock',           'App\Http\Controllers\HistoryStockController@insert');
//update HistoryStock untuk 
Route::get('/edit-HistoryStock',          	'App\Http\Controllers\HistoryStockController@edit');
Route::post('/update-HistoryStock/{id}',    'App\Http\Controllers\HistoryStockController@update');
//hapus HistoryStock
Route::get('/destroy-HistoryStock/{id}',    'App\Http\Controllers\HistoryStockController@destroy');



