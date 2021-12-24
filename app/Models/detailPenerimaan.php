<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPenerimaan extends Model
{
    use HasFactory;

    protected $table = 'detail_penerimaan';
    protected $fillable = ['id','id_terima','kode_bar','harga_his','jumlah_his','sub_total'];

    public function modelbarang()
    {
	return $this->belongsTo(modelbarang::class,'kode_bar','id');
    }
    public function Penerimaan()
    {
	return $this->belongsTo(Penerimaan::class,'id_terima','id');
    }
}
