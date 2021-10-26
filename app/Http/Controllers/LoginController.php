<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        // $user = User::all();
        return view('login');
        // return view('login',['user'=>$user]);
    }

    public function authenticate($username,$password)
    {
        $user = User::find($username,$password);
        echo $user;
        // if ($item==null) {
        // return redirect('homePegawai');
        // }
        // else{return redirect('/');}
        
    }
    public function destroy($id){
        $item = modelbarang::find($id);
        echo $item;
        if ($item==null) {
        return redirect('homePegawai');
            
        }
        // $item->delete();
        // return redirect('homePegawai');
    }

}
 