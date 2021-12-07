<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kota;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_user     = User::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.user.user', ['table_user'=>$table_user],['title' => 'Data User']);
         }
        else
         {
            return view('pegawai.user.user', ['table_user'=>$table_user],['title' => 'Data User']);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        $table_kota = Kota::all();
        $table_role = Role::all();
        return view('pegawai.user.insert_user',['table_kota'=>$table_kota],['table_role'=>$table_role]);
    }
    public function create(Request $request)
    {
        $data = $request->input();//insert into
            
        $user = new User;//table_user

        //value
        //table dan colomn        value
        $user->username         = $data['username'];
        $user->password         = $data['password'];
        $user->email            = $data['email'];
        $user->nama_user        = $data['nama_user'];
        $user->alamat_user      = $data['alamat_user'];
        $user->telp_user        = $data['telp_user'];
        $user->id_kota          = $data['id_kota'];
        $user->id_role          = $data['id_role'];
        //run / execute quesry
        $user->save();

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = User::find($id);
        $data = $request->input();

        $item->username         = $data['username'];
        $item->password         = $data['password'];
        $item->email            = $data['email'];
        $item->nama_user        = $data['nama_user'];
        $item->alamat_user      = $data['alamat_user'];
        $item->telp_user        = $data['telp_user'];
        $item->id_kota          = $data['id_kota'];
        $item->id_role          = $data['id_role'];
        $item->save();
        
        return redirect('/Home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();
        return redirect('User');
    }
}
