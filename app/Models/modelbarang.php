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

}
