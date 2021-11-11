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
Route::get ('/home',                        'App\Http\Controllers\BarangController@index');
Route::get ('/home1',                       'App\Http\Controllers\BarangController@index');
//input barang baru untuk 
Route::post('/create_barang',               'App\Http\Controllers\BarangController@create');
Route::get ('/input_barang',                'App\Http\Controllers\BarangController@insert');
//update barang untuk 
Route::get('/edit_barang',            		'App\Http\Controllers\BarangController@edit');
Route::post('/update_barang/{id}',          'App\Http\Controllers\BarangController@update');
//hapus barang untuk 
Route::get('/destroy_barang/{id}',       	'App\Http\Controllers\BarangController@destroy');

// jenis barang
Route::get('/Jenis_Barang',                 'App\Http\Controllers\JenisBarangController@Index');
//input jenis barang baru untuk 
Route::post('/create_jenis_barang',         'App\Http\Controllers\JenisBarangController@create');
Route::get('/input_jenis_barang',           'App\Http\Controllers\JenisBarangController@insert');
//update jenis barang untuk 
Route::post('/edit_jenis_barang/{id}',      'App\Http\Controllers\BarangController@edit');
Route::get('/update_jenis_barang/{id}',     'App\Http\Controllers\BarangController@update');
//hapus jenis barang
Route::get('/destroy_jenis_barang/{id}', 	'App\Http\Controllers\JenisBarangController@destroy');

//pemesanan
Route::get('/pemesanan',                    'App\Http\Controllers\PemesananController@index');
//input pemesanan 
Route::post('/create_pemesanan',            'App\Http\Controllers\PemesananController@create');
Route::get('/input_pemesanan',              'App\Http\Controllers\PemesananController@insert');
//update jenis barang untuk 
Route::post('/edit_pemesanan/{id}',         'App\Http\Controllers\PemesananController@edit');
Route::get('/update_pemesanan/{id}',        'App\Http\Controllers\PemesananController@update');
//hapus pemesanan
Route::get('/destroy_pemesanan/{id}',       'App\Http\Controllers\PemesananController@destroy');

//User
Route::get('/User',            	 	        'App\Http\Controllers\UserController@index');
//input User 
Route::post('/create_User',              	'App\Http\Controllers\UserController@create');
Route::get('/input_User',               	'App\Http\Controllers\UserController@insert');
//update user untuk 
Route::post('/edit_User/{id}',          	'App\Http\Controllers\UserController@edit');
Route::get('/update_User/{id}',         	'App\Http\Controllers\UserController@update');
//hapus User
Route::get('/destroy_User/{id}',        	'App\Http\Controllers\UserController@destroy');

//Warna
Route::get('/Warna',                    	'App\Http\Controllers\WarnaController@index');
//input Warna 
Route::post('/create_Warna',            	'App\Http\Controllers\WarnaController@create');
Route::get('/input_Warna',              	'App\Http\Controllers\WarnaController@insert');
//update warna untuk 
Route::post('/edit_Warna/{id}',         	'App\Http\Controllers\WarnaController@edit');
Route::get('/update_Warna/{id}',        	'App\Http\Controllers\WarnaController@update');
//hapus Warna
Route::get('/destroy_Warna/{id}',       	'App\Http\Controllers\WarnaController@destroy');

//Ukuran
Route::get('/Ukuran',                   	'App\Http\Controllers\UkuranController@index');
//input Ukuran 
Route::post('/create_Ukuran',               'App\Http\Controllers\UkuranController@create');
Route::get('/input_Ukuran',             	'App\Http\Controllers\UkuranController@insert');
//update ukuran untuk 
Route::post('/edit_Ukuran/{id}',            'App\Http\Controllers\UkuranController@edit');
Route::get('/update_Ukuran/{id}',       	'App\Http\Controllers\UkuranController@update');
//hapus Ukuran
Route::get('/destroy_Ukuran/{id}',      	'App\Http\Controllers\UkuranController@destroy');

//Kota
Route::get('/Kota',                 		'App\Http\Controllers\KotaController@index');
//input Kota 
Route::post('/create_Kota',              	'App\Http\Controllers\KotaController@create');
Route::get('/input_Kota',               	'App\Http\Controllers\KotaController@insert');
//update Kota untuk 
Route::post('/edit_Kota/{id}',          	'App\Http\Controllers\KotaController@edit');
Route::get('/update_Kota/{id}',     		'App\Http\Controllers\KotaController@update');
//hapus Kota
Route::get('/destroy_Kota/{id}',        	'App\Http\Controllers\KotaController@destroy');

//Role
Route::get('/Role',                 		'App\Http\Controllers\RoleController@index');
//input Role 
Route::post('/create_Role',              	'App\Http\Controllers\RoleController@create');
Route::get('/input_Role',               	'App\Http\Controllers\RoleController@insert');
//update Role untuk 
Route::post('/edit_Role/{id}',          	'App\Http\Controllers\RoleController@edit');
Route::get('/update_Role/{id}',     		'App\Http\Controllers\RoleController@update');
//hapus Role
Route::get('/destroy_Role/{id}',        	'App\Http\Controllers\RoleController@destroy');

//Supplier
Route::get('/Supplier',                 	'App\Http\Controllers\SupplierController@index');
//input Supplier 
Route::post('/create_Supplier',             'App\Http\Controllers\SupplierController@create');
Route::get('/input_Supplier',               'App\Http\Controllers\SupplierController@insert');
//update Supplier untuk 
Route::post('/edit_Supplier/{id}',          'App\Http\Controllers\SupplierController@edit');
Route::get('/update_Supplier/{id}',     	'App\Http\Controllers\SupplierController@update');
//hapus Supplier
Route::get('/destroy_Supplier/{id}',        'App\Http\Controllers\SupplierController@destroy');

//Penerimaan
Route::get('/Penerimaan',                   'App\Http\Controllers\PenerimaanController@index');
//input Penerimaan 
Route::post('/create_Penerimaan',           'App\Http\Controllers\PenerimaanController@create');
Route::get('/input_Penerimaan',             'App\Http\Controllers\PenerimaanController@insert');
//update Penerimaan untuk 
Route::post('/edit_Penerimaan/{id}',        'App\Http\Controllers\PenerimaanController@edit');
Route::get('/update_Penerimaan/{id}',       'App\Http\Controllers\PenerimaanController@update');
//hapus Penerimaan
Route::get('/destroy_Penerimaan/{id}',      'App\Http\Controllers\PenerimaanController@destroy');

//Pembayaran
Route::get('/pembayaran',                   'App\Http\Controllers\PembayaranController@index');
//input Pembayaran 
Route::post('/create_Pembayaran',                'App\Http\Controllers\PembayaranController@create');
Route::get('/input_Pembayaran',             'App\Http\Controllers\PembayaranController@insert');
//update Pembayaran untuk 
Route::post('/edit_Pembayaran/{id}',            'App\Http\Controllers\PembayaranController@edit');
Route::get('/update_Pembayaran/{id}',       'App\Http\Controllers\PembayaranController@update');
//hapus Pembayaran
Route::get('/destroy_Pembayaran/{id}',      'App\Http\Controllers\PembayaranController@destroy');

//History Stock
Route::get('/HistoryStock',                 'App\Http\Controllers\HistoryStockController@index');
//input HistoryStock 
Route::post('/create_HistoryStock',              'App\Http\Controllers\HistoryStockController@create');
Route::get('/input_HistoryStock',               'App\Http\Controllers\HistoryStockController@insert');
//update HistoryStock untuk 
Route::post('/edit_HistoryStock/{id}',          'App\Http\Controllers\HistoryStockController@edit');
Route::get('/update_HistoryStock/{id}',     'App\Http\Controllers\HistoryStockController@update');
//hapus HistoryStock
Route::get('/destroy_HistoryStock/{id}',        'App\Http\Controllers\HistoryStockController@destroy');



