<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use Illuminate\Http\Request;
use App\Models\session;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data           = Warna::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.warna.warna', [
                'title' => 'Data Warna',
                'data'=>$data
            ]);
         }
        else
         {
            return view('pegawai.warna.warna', [
                'title' => 'Data Warna',
                'data'=>$data
            ]);
         }
    }

    public function insert()
    {
        $data           = Warna::all();

        $auth           = session::all();
        $session        = session::all()->where('role',1);
        $z              = '[]';
        if($auth==$z){return redirect('/');}

        if ($session==$z) 
        {
            return view('pemilik.warna.tambah', [
                'title' => 'Tambah Data Warna',
                'Warna' => $data,
                'role' => 'Pemilik',
                'auth' => $auth
            ]);
        }
        else
        {
            return view('pegawai.warna.tambah', [
                'title' => 'Tambah Data Warna',
                'Warna' => $data,
                'role' => 'Pegawai',
                'auth' => $auth
            ]);
        }
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $Warna = new Warna;

        $Warna->warna   = $data['warna'];
        
        $Warna->save();

        return redirect('/Warna');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function edit(Warna $warna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warna $warna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $item = Warna::find($id);
        $item->delete();
        return redirect('/Warna');
    }
}
