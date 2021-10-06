<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePemilikController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        return view('pemilik.indexPemilik');
    }
    public function about()
    {
        return view('pemilik.About');
    }
}
