<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //use HasFactory;

    protected $table = 'table_supplier';

    #RELASI
    public function Pemesanan()
    {
        return $this->hasMany(Pemesanan::class,'id_sup','id'); 
    }
    
    public function Kota()
    {
        return $this->belongsTo(Kota::class,'id_kota','id');
    }

    public function Penerimaan()
    {
        return $this->hasMany(Penerimaan::class,'id_sup','id');
    }
}
