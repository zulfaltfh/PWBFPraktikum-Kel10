<?php

use App\Http\Controllers\LoginController;
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
//Route::get('/Login', [LoginController::class, 'index']);
Route::get('/', 'App\Http\Controllers\HomeController@login');
Route::post('/signin/{$nama_user,$password_user}',  'App\Http\Controllers\HomeController@index');

//pegawai barang
Route::get ('/homePegawai',                         'App\Http\Controllers\BarangController@index');
Route::get ('/homePegawai1',                        'App\Http\Controllers\BarangController@index');
//input barang baru untuk pegawai
Route::post('/create_barang_pegawai',               'App\Http\Controllers\BarangController@create');
Route::get ('/input_barang_pegawai',                'App\Http\Controllers\BarangController@insert');
//update barang untuk pegawai
Route::get('/edit_barang_pegawai/{id}',            'App\Http\Controllers\BarangController@edit');
Route::get('/update_barang_pegawai/{id}',           'App\Http\Controllers\BarangController@update');
//hapus barang untuk pegawai
Route::get('/destroy_barang_pegawai/{id}',       'App\Http\Controllers\BarangController@destroy');

//pegawai jenis barang
Route::get('/Jenis_Barang_Pegawai',                 'App\Http\Controllers\JenisBarangController@Index');
//input jenis barang baru untuk pegawai
Route::post('/create_jenis_barang_pegawai',         'App\Http\Controllers\JenisBarangController@create');
Route::get('/input_jenis_barang_pegawai',           'App\Http\Controllers\JenisBarangController@insert');
//update jenis barang untuk pegawai
Route::post('/edit_jenis_barang_pegawai/{id}',      'App\Http\Controllers\BarangController@edit');
Route::get('/update_jenis_barang_pegawai/{id}',     'App\Http\Controllers\BarangController@update');
//hapus jenis barang
Route::get('/destroy_jenis_barang_pegawai/{id}', 'App\Http\Controllers\JenisBarangController@destroy');

//pemesanan
Route::get('/pemesanan_pegawai',                    'App\Http\Controllers\PemesananController@index');
//input pemesanan 
Route::post('/create_pemesanan_pegawai',             'App\Http\Controllers\PemesananController@create');
Route::get('/input_pemesanan_pegawai',              'App\Http\Controllers\PemesananController@insert');
//update jenis barang untuk pegawai
Route::post('/edit_pemesanan_pegawai/{id}',         'App\Http\Controllers\PemesananController@edit');
Route::get('/update_pemesanan_pegawai/{id}',        'App\Http\Controllers\PemesananController@update');
//hapus pemesanan
Route::get('/destroy_pemesanan_pegawai/{id}',       'App\Http\Controllers\PemesananController@destroy');

//User
Route::get('/User_pegawai',                     'App\Http\Controllers\UserController@index');
//input User 
Route::post('/create_User_pegawai',              'App\Http\Controllers\UserController@create');
Route::get('/input_User_pegawai',               'App\Http\Controllers\UserController@insert');
//update user untuk pegawai
Route::post('/edit_User_pegawai/{id}',          'App\Http\Controllers\UserController@edit');
Route::get('/update_User_pegawai/{id}',         'App\Http\Controllers\UserController@update');
//hapus User
Route::get('/destroy_User_pegawai/{id}',        'App\Http\Controllers\UserController@destroy');

//Warna
Route::get('/Warna_pegawai',                    'App\Http\Controllers\WarnaController@index');
//input Warna 
Route::post('/create_Warna_pegawai',             'App\Http\Controllers\WarnaController@create');
Route::get('/input_Warna_pegawai',              'App\Http\Controllers\WarnaController@insert');
//update warna untuk pegawai
Route::post('/edit_Warna_pegawai/{id}',         'App\Http\Controllers\WarnaController@edit');
Route::get('/update_Warna_pegawai/{id}',        'App\Http\Controllers\WarnaController@update');
//hapus Warna
Route::get('/destroy_Warna_pegawai/{id}',       'App\Http\Controllers\WarnaController@destroy');

//Ukuran
Route::get('/Ukuran_pegawai',                   'App\Http\Controllers\UkuranController@index');
//input Ukuran 
Route::post('/create_Ukuran_pegawai',                'App\Http\Controllers\UkuranController@create');
Route::get('/input_Ukuran_pegawai',             'App\Http\Controllers\UkuranController@insert');
//update ukuran untuk pegawai
Route::post('/edit_Ukuran_pegawai/{id}',            'App\Http\Controllers\UkuranController@edit');
Route::get('/update_Ukuran_pegawai/{id}',       'App\Http\Controllers\UkuranController@update');
//hapus Ukuran
Route::get('/destroy_Ukuran_pegawai/{id}',      'App\Http\Controllers\UkuranController@destroy');

//Kota
Route::get('/Kota_pegawai',                 'App\Http\Controllers\KotaController@index');
//input Kota 
Route::post('/create_Kota_pegawai',              'App\Http\Controllers\KotaController@create');
Route::get('/input_Kota_pegawai',               'App\Http\Controllers\KotaController@insert');
//update Kota untuk pegawai
Route::post('/edit_Kota_pegawai/{id}',          'App\Http\Controllers\KotaController@edit');
Route::get('/update_Kota_pegawai/{id}',     'App\Http\Controllers\KotaController@update');
//hapus Kota
Route::get('/destroy_Kota_pegawai/{id}',        'App\Http\Controllers\KotaController@destroy');

//Role
Route::get('/Role_pegawai',                 'App\Http\Controllers\RoleController@index');
//input Role 
Route::post('/create_Role_pegawai',              'App\Http\Controllers\RoleController@create');
Route::get('/input_Role_pegawai',               'App\Http\Controllers\RoleController@insert');
//update Role untuk pegawai
Route::post('/edit_Role_pegawai/{id}',          'App\Http\Controllers\RoleController@edit');
Route::get('/update_Role_pegawai/{id}',     'App\Http\Controllers\RoleController@update');
//hapus Role
Route::get('/destroy_Role_pegawai/{id}',        'App\Http\Controllers\RoleController@destroy');

//Supplier
Route::get('/Supplier_pegawai',                 'App\Http\Controllers\SupplierController@index');
//input Supplier 
Route::post('/create_Supplier_pegawai',              'App\Http\Controllers\SupplierController@create');
Route::get('/input_Supplier_pegawai',               'App\Http\Controllers\SupplierController@insert');
//update Supplier untuk pegawai
Route::post('/edit_Supplier_pegawai/{id}',          'App\Http\Controllers\SupplierController@edit');
Route::get('/update_Supplier_pegawai/{id}',     'App\Http\Controllers\SupplierController@update');
//hapus Supplier
Route::get('/destroy_Supplier_pegawai/{id}',        'App\Http\Controllers\SupplierController@destroy');

//Penerimaan
Route::get('/Penerimaan_pegawai',                   'App\Http\Controllers\PenerimaanController@index');
//input Penerimaan 
Route::post('/create_Penerimaan_pegawai',                'App\Http\Controllers\PenerimaanController@create');
Route::get('/input_Penerimaan_pegawai',             'App\Http\Controllers\PenerimaanController@insert');
//update Penerimaan untuk pegawai
Route::post('/edit_Penerimaan_pegawai/{id}',            'App\Http\Controllers\PenerimaanController@edit');
Route::get('/update_Penerimaan_pegawai/{id}',       'App\Http\Controllers\PenerimaanController@update');
//hapus Penerimaan
Route::get('/destroy_Penerimaan_pegawai/{id}',      'App\Http\Controllers\PenerimaanController@destroy');

//Pembayaran
Route::get('/pembayaran_pegawai',                   'App\Http\Controllers\PembayaranController@index');
//input Pembayaran 
Route::post('/create_Pembayaran_pegawai',                'App\Http\Controllers\PembayaranController@create');
Route::get('/input_Pembayaran_pegawai',             'App\Http\Controllers\PembayaranController@insert');
//update Pembayaran untuk pegawai
Route::post('/edit_Pembayaran_pegawai/{id}',            'App\Http\Controllers\PembayaranController@edit');
Route::get('/update_Pembayaran_pegawai/{id}',       'App\Http\Controllers\PembayaranController@update');
//hapus Pembayaran
Route::get('/destroy_Pembayaran_pegawai/{id}',      'App\Http\Controllers\PembayaranController@destroy');

//History Stock
Route::get('/HistoryStock_pegawai',                 'App\Http\Controllers\HistoryStockController@index');
//input HistoryStock 
Route::post('/create_HistoryStock_pegawai',              'App\Http\Controllers\HistoryStockController@create');
Route::get('/input_HistoryStock_pegawai',               'App\Http\Controllers\HistoryStockController@insert');
//update HistoryStock untuk pegawai
Route::post('/edit_HistoryStock_pegawai/{id}',          'App\Http\Controllers\HistoryStockController@edit');
Route::get('/update_HistoryStock_pegawai/{id}',     'App\Http\Controllers\HistoryStockController@update');
//hapus HistoryStock
Route::get('/destroy_HistoryStock_pegawai/{id}',        'App\Http\Controllers\HistoryStockController@destroy');


//pemilik
Route::get('/homePemilik',                          'App\Http\Controllers\homePemilikController@Index');
Route::get('/databarang',                           'App\Http\Controllers\homePemilikController@barang');

