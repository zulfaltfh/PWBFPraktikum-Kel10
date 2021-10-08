<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    //use HasFactory;
    protected $table = 'table_penerimaan';

    public function Pembayaran()
    {
        return $this->belongsTo(Pembayaran::class,'id_terima','id');
    }

    public function detailPenerimaan()
    {
        return $this->hasMany(detailPenerimaan::class,'id_terima','id');
    }

    public function User()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class,'id_sup','id');
    }
}
