<?php

namespace App\Http\Controllers;

use App\Models\modelbarang;
use Illuminate\Http\Request;

class HomePemilikController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        $table_barang = modelbarang::all();
        return view('pemilik.indexPemilik', ['table_barang'=>$table_barang]);
    }
    public function barang()
    {
        $table_barang = modelbarang::all();
        return view('pemilik.indexPemilik', ['table_barang'=>$table_barang]);
    }
}
