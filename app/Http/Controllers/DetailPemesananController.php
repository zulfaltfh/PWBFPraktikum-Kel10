<?php

namespace App\Http\Controllers;

use App\Models\detailPemesanan;
use App\Models\modelbarang;
use Illuminate\Http\Request;
use App\Models\session;

class DetailPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data           = detailPemesanan::with('modelbarang','Pemesanan')->get();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.detailpemesanan.detailpemesanan', ['data'=>$data]);
         }
        else
         {
            return view('pegawai.detailpemesanan.detailpemesanan', ['data'=>$data]);
         }
    }

    public function insert(Request $request)
    {
        $table_barang   = modelbarang::with('jenisBarang')->get();

        $auth = session::all();
        $z = '[]';//null
        $session        = session::all()->where('role',1);
        
        if($auth==$z){return redirect('/');}
        if ($session==$z)
        {
            return view('pemilik.barang.barang', [
            	'title' => 'Data Barang',
            	'table_barang'=>$table_barang,
                'role' => 'Pemilik',
                'auth' => $auth
            ]);
        }
        else
        {
            return view('pegawai.detailpemesanan.insert_detailpemesanan', [
                'title' => 'Tambah Data Barang',
                'table_barang'=>$table_barang
            ]);
        }
    }

    public function create(Request $request){
        $data = $request->input();//insert into
        
        $item = new detailPemesanan;// table
        
        //value
        $item->jumlah_up    = $data['jumlah_up'];
        $item->harga_up     = $data['harga_up'];
        $item->id_pesan     = $data['id_pesan'];
        $item->kode_bar     = $data['kode_bar'];
        $item->save();//tombol run sqlyog

        return redirect('/Home');
            
    }

    public function show(detailPemesanan $detailPemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(detailPemesanan $detailPemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailPemesanan $detailPemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailPemesanan $detailPemesanan)
    {
        //
    }
}
