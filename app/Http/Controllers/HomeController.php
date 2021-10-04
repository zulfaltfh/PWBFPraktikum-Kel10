<?php

namespace App\Http\Controllers;

use App\Models\modelbarang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        $table_barang = modelbarang::all();
        return view('index', ['table_barang'=>$table_barang]);
    }
    public function about()
    {
        return view('About');
    }

    public function faq()
    {
        return view('faq');
    }
}
