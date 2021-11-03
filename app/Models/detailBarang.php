<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailBarang extends Model
{
    use HasFactory;

    protected $table = 'detail_barang';

    #RELASI
    public function modelbarang ()
    {
        return $this->belongsTo(modelbarang::class,'kode_bar','id');
    }

    public function Ukuran()
    {
        return $this->belongsTo(Ukuran::class,'id_ukuran','id');
    }

    public function Warna()
    {
        return $this->belongsTo(Warna::class,'id_warna','id');
    }
}
