<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'table_pembayaran';
    
    public function Penerimaan()
    {
	return $this->belongsTo(Penerimaan::class,'id_terima','id');
    }
}
