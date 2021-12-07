<?php

namespace App\Http\Controllers;

use App\Models\detailPenerimaan;
use Illuminate\Http\Request;
use App\Models\session;

class DetailPenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data           = detailPenerimaan::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.detailpenerimaan.detailpenerimaan', ['data'=>$data]);
         }
        else
         {
            return view('pegawai.detailpenerimaan.datailpenerimaan', ['data'=>$data]);
         }
    }

    public function insert()
    {
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        return view('pegawai.detailpenerimaan.insert_detailpenerimaan', [
            'title' => 'Tambah Data Barang'
        ]);
    }

    public function create(Request $request){
        $data = $request->input();//insert into
        
        $item = new detailPenerimaan;// table
        
        //value
        $item->nama_bar       = $data['nama_bar'];
        $item->stock_barang   = $data['stock_barang'];
        $item->harga_beli_bar = $data['harga_beli_bar'];
        $item->harga_jual_bar = $data['harga_jual_bar'];
        $item->id_jb          = $data['id_jb'];
        $item->save();//tombol run sqlyog

        return redirect('/Home');
            
    }

    public function show(detailPenerimaan $detailPenerimaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detailPenerimaan  $detailPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit(detailPenerimaan $detailPenerimaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailPenerimaan  $detailPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detailPenerimaan $detailPenerimaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailPenerimaan  $detailPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(detailPenerimaan $detailPenerimaan)
    {
        //
    }
}
