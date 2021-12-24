<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPemesanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pemesanan';
    protected $fillable = ['id','id_pesan','kode_bar','jumlah_up','harga_up'];
    public function modelbarang()
    {
        return $this->belongsTo(modelbarang::class,'kode_bar','id');
    }

    public function Pemesanan()
    {
        return $this->belongsTo(Pemesanan::class,'id_pesan','id');
    }
}
