<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\session;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function index()
    {
        // $user = User::all();
        $item = session::truncate();
        return view('login');
        // return view('login',['user'=>$user]);
    }

    public function authenticate(Request $request)
    {
        $data = $request;
        // echo $data['nama_user'];
        // echo $data['id'];
        $a        = User::all()->where('username','=',$data['username']);
        $null = '[]';
        if ($a!=$null) {
            $username = User::find($a)->where('username','=',$data['username']);
            $password = User::find($a)->where('password','=',$data['id']);
            $role1    = User::find($username)->where('id_role',1);//statis
            // echo $username;
            // echo $password;
            // echo $role1;
            if($username != $password ){return redirect('/');}
            else
            {
                $asd = $request->input();
                $session = new session;
                $session->id       = $asd['session'];
                $session->save();
            }
            if ($role1==$username) {return redirect('homePegawai');} 
            else {return redirect('homePemilik');}
        }
        else{return redirect('/');}

    }
    public function logout()
    {
        $item = session::truncate();
        return redirect('/');       
    }

}
 