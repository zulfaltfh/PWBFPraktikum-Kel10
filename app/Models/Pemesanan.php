<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'table_pemesanan';
    protected $fillable = ['id','id_user','id_sup','status_pesan'];

    #RELASI
    public function detailPemesanan()
    {
        return $this->hasMany(detailPemesanan::class,'id_pesan','id');
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
