<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisBarang extends Model
{
    //use HasFactory;

    protected $table = 'table_jenis_barang';

    #RELASI
    public function modelbarang()
    {
        return $this->hasMany(modelbarang::class,'id_jb','id');
    }
}
