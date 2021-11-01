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
        $table_user = User::all();
        $auth = session::all();
        $z = '[]';
        if($auth==$z){return redirect('/');}
        return view('pegawai.user',['table_user'=>$table_user]);
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
        return view('pegawai.insert_user',['table_kota'=>$table_kota],['table_role'=>$table_role]);
    }
    public function create(Request $request)
    {
        $data = $request->input();
            
        $user = new User;

        $user->username         = $data['username'];
        $user->password         = $data['password'];
        $user->email            = $data['email'];
        $user->nama_user        = $data['nama_user'];
        $user->alamat_user      = $data['alamat_user'];
        $user->telp_user        = $data['telp_user'];
        $user->id_kota          = $data['id_kota'];
        $user->id_role          = $data['id_role'];
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
    public function edit($id)
    {
        //
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
        //
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
        return redirect('User_pegawai');
    }
}
