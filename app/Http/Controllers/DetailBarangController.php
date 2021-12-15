<?php

namespace App\Http\Controllers;

use App\Models\session;
use App\Models\Warna;
use App\Models\Ukuran;
use App\Models\detailBarang;
use App\Models\modelbarang;
use Illuminate\Http\Request;


class DetailBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $detbar         = detailBarang::with(['modelbarang','Ukuran','Warna'])->where('id', $request['id']);
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
        {
            return view('pemilik.DetailBarang.detailbarang', [
                'title' => 'Detail Barang',
                'detbar' => $detbar
            ]);
        }
        else
        {
            return view('pegawai.DetailBarang.detailbarang', [
                'title' => 'Detail Barang',
                'detbar' => $detbar
            ]);
        }
    }

    public function insert()
    {
        $ukuran = Ukuran::all();
        $warna = Warna::all();

        return view('pegawai.DetailBarang.tambah',[
            'title'=>'Tambah Detail Barang',
            'ukuran'=> $ukuran,
            'warna'=> $warna
        ]);
    }

    public function store(Request $request) 
    {
        //
    }

    public function show(detailBarang $detailBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailBarang  $detailBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(detailBarang $detailBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailBarang  $detailBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailBarang $detailBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailBarang  $detailBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailBarang $detailBarang)
    {
        //
    }
}
