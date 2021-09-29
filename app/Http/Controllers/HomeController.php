<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        return view('hepi');
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
