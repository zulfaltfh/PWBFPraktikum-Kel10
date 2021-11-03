<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historyStock extends Model
{
    use HasFactory;

    protected $table = 'table_history_stock';

    #RELASI
    public function modelbarang()
    {
        return $this->belongsTo(modelbarang::class,'kode_bar','id');
    }
}
