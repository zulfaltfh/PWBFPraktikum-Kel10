<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    //use HasFactory;

    protected $table = 'table_ukuran';

    #RELASI
    public function detailBarang()
    {
        return $this->hasMany(detailBarang::class,'id_ukuran','id');
    }
}
