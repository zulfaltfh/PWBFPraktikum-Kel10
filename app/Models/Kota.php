<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'table_kota';
    protected $fillable = ['nama_kota'];
    
    public function User()
    {
        return $this->hasMany(User::class,'id_kota','id');
    }
}
