<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
use App\Models\session;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota           = Kota::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}

        if ($session==$z) 
        {
            return view('pemilik.Kota.kota', [
                'title' => 'Daftar Kota',
                'kota' => $kota,
                'role' => 'Pemilik',
                'auth' => $auth
            ]);
        }
        else
        {
            return view('pegawai.Kota.kota', [
                'title' => 'Daftar Kota',
                'kota' => $kota,
                'role' => 'Pegawai',
                'auth' => $auth
            ]);
        }
    }

    public function insert()
    {
        $data           = Kota::all();

        $auth           = session::all();
        $session        = session::all()->where('role',1);
        $z              = '[]';
        if($auth==$z){return redirect('/');}

        if ($session==$z) 
        {
            return view('pemilik.Kota.tambah', [
                'title' => 'Tambah Data Kota',
                'Kota' => $data,
                'role' => 'Pemilik',
                'auth' => $auth
            ]);
        }
        else
        {
            return view('pegawai.Kota.tambah', [
                'title' => 'Tambah Data Kota',
                'Kota' => $data,
                'role' => 'Pegawai',
                'auth' => $auth
            ]);
        }
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $kota = new Kota;

        $kota->nama_kota   = $data['nama_kota'];
        
        $kota->save();

        return redirect('/Kota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    // public function edit(Request $request)
    // {
    //     $data = Kota::all();
    //     $auth = session::all();
    //     $z = '[]';//null
    //     if($auth==$z){return redirect('/');}
        
    //     return view('pegawai/kota/edit', [
    //         'title' => 'Edit Kota',
    //         'Kota'=>$data,
    //         'request'=>$request]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Kota  $kota
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     Kota::where('id', $id)->update([
    //         'nama_kota' => $request->nama_kota
    //     ]);
        
    //     return redirect('/update-Kota');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $item = Kota::find($id);
        $item->delete();
        return redirect('/Kota');
    }
}
