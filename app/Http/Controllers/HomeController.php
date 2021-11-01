<?php

namespace App\Http\Controllers;

use App\Models\modelbarang;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\session;

class HomeController extends Controller
{
    // public function login()
    // {
    //     return view('login');
    // }

    public function index(Request $request)
    {
  
        if ($request->User()->hasRole('pegawai')) 
        {
            return redirect('homePegawai');
        }
        else 
        {
            return redirect('homePemilik');
        }
 
    }
}
 