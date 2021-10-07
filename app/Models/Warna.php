<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    //use HasFactory;

    protected $table = 'table_warna';

    #RELASI
    public function detailBarang()
    {
        return $this->hasMany(detailBarang::class,'id_warna','id');
    }
}
