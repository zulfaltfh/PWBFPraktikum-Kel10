<?php

namespace App\Http\Controllers;

use App\Models\session;
use App\Models\jenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a              = jenisBarang::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.jenisbarang.jenis_barang', [
                'title' => 'Data Jenis Barang',
                'a'=>$a
            ]);
         }
        else
         {
            return view('pegawai.jenisbarang.jenis_barang', [
                'title' => 'Data Jenis Barang',
                'a'=>$a
            ]);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(){
        $a              = jenisBarang::all();
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}

        return view('pegawai.jenisbarang.insert_jenis_barang',[
            'title' => 'Tambah Data Jenis Barang',
            'jenis_barang' => $a
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $barang = new jenisBarang;
        $barang->jenis_barang   = $data['jenis_barang'];
        $barang->save();

        return redirect('JenisBarang');
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
     * Display the specified resource.
     *
     * @param  \App\Models\jenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function show(jenisBarang $jenisBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(jenisBarang $jenisBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenisBarang $jenisBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = jenisBarang::find($id);
        $item->delete();
        return redirect('JenisBarang');
    }
}
