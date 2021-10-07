<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelbarang extends Model
{
    //select
    protected $table = 'table_barang'; 

    //public $timestamps = true;
    
    //insert
    protected $fillable = [
		'kode_bar', 'nama_bar','stock_barang', 'harga_beli_bar', 'harga_jual_bar'
	  ];
    
    #RELASI
    //relasi dgn detail Pemesanan
    public function detailPemesanan()
    {
      return $this->hasMany(detailPemesanan::class,'kode_bar','id');
    }

    //relasi dgn jenis Barang
    public function jenisBarang()
    {
      return $this->belongsTo(jenisBarang::class,'id_jb','id');
    }
    
    //relasi dgn history Stock
    public function historyStock()
    {
      return $this->hasMany(historyStock::class,'kode_bar','id');
    }

    //relasi dgn detail barang
    public function detailBarang()
    {
      return $this->hasMany(detailBarang::class,'kode_bar','id');
    }

    //relasi dgn detail penerimaan
    public function detailPenerimaan()
    {
      return $this->hasMany(detailPenerimaan::class,'kode_bar','id');
    }
}
