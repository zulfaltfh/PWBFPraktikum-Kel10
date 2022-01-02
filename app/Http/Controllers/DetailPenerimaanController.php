<?php

namespace App\Http\Controllers;

use App\Models\detailPenerimaan;
use App\Models\modelbarang;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use App\Models\session;

class DetailPenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $data           = detailPenerimaan::all()->where('id_terima',$request['id']);
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.detailpenerimaan.detailpenerimaan', [
                'data'=>$data,
                'title'=>'Detail Penerimaan',
                'request'=>$request
            ]);
         }
        else
         {
            return view('pegawai.detailpenerimaan.detailpenerimaan', [
                'data'=>$data,
                'title'=>'Detail Penerimaan',
                'request'=>$request
            ]);
         }
    }

    public function insert(request $request)
    {
        $table_barang = modelbarang::all();
        $table_penerimaan = Penerimaan::all();

        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        return view('pegawai.detailpenerimaan.insert_detailpenerimaan', [
            'title' => 'Tambah Data Barang',
            'table_barang'=>$table_barang,
            'table_penerimaan'=>$table_penerimaan,
            'request'=>$request
        ]);
    }

    public function create(Request $request){
        $data = $request->input();//insert into
        
        $item = new detailPenerimaan;// table
        
        //value
        $item->harga_his    = $data['harga_his'];
        $item->jumlah_his   = $data['jumlah_his'];
        $item->sub_total    = $data['sub_total'];
        $item->kode_bar     = $data['nama_bar'];        

        $item->save();//tombol run sqlyog

        return redirect('/Penerimaan');
            
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
    public function edit(Request $request)
    {
        $table_penerimaan   = Penerimaan::all();
        $table_barang = modelbarang::all();

        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        
        return view('pegawai.detailPenerimaan.edit_detPenerimaan', [
            'title' => 'Edit Detail Penerimaan',
            'table_penerimaan'=>$table_penerimaan,
            'table_barang' =>$table_barang,
            'request'=>$request
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailPenerimaan  $detailPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = detailPenerimaan::find($id);
        
        $item->harga_his    = $request->input('harga_his');
        $item->jumlah_his   = $request->input('jumlah_his');
        $item->sub_total    = $request->input('sub_total');
        $item->kode_bar     = $request->input('nama_bar');
        $item->id_terima    = $request->input('id_terima');
        $item->save();
        
        return redirect('/Penerimaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailPenerimaan  $detailPenerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = detailPenerimaan::find($id);
        $item->delete();
        return redirect('/Penerimaan');
    }
}
