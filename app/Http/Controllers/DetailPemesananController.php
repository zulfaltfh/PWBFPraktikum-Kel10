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
    public function index(Request $request)    
    {
        $data           = detailPemesanan::all()->where('id_pesan',$request['id_pesan']);
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.detailpemesanan.detailpemesanan', [
                'data'=>$data,
                'title'=>'Detail Pemesanan',
                'request'=>$request
            ]);
         }
        else
         {
            return view('pegawai.detailpemesanan.detailpemesanan', [
                'data'=>$data,
                'title'=>'Detail Pemesanan',
                'request'=>$request
            ]);
         }
    }

    public function insert(Request $request)
    {
        $table_barang   = modelbarang::all();

        $auth = session::all();
        $z = '[]';//null
        $session        = session::all()->where('role',1);
        
        if($auth==$z){return redirect('/');}
        if ($session==$z)
        {
            return view('pemilik.DetailPemesanan.insert_detailpemesanan', [
            	'title' => 'Tambah Detail Pemesanan',
            	'table_barang'=>$table_barang,
                'role' => 'Pemilik',
                'auth' => $auth,
                'request'=>$request
            ]);
        }
        else
        {
            return view('pegawai.DetailPemesanan.insert_detailpemesanan', [
                'title' => 'Tambah Detail Pemesanan',
                'table_barang'=>$table_barang,
                'request'=>$request
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
        $item->kode_bar     = $data['nama_bar'];
        $item->save();//tombol run sqlyog

        return redirect('/Pemesanan');
            
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
    public function edit(Request $request)
    {
        $table_barang   = modelbarang::with('jenisBarang')->get();
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        
        return view('pegawai.detailpemesanan.edit_detailpemesanan', [
            'title' => 'Edit Detail Pemesanan',
            'table_barang'=>$table_barang,
            'request'=>$request
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = detailPemesanan::find($id);
        
        $item->jumlah_up    = $request->input('jumlah_up');
        $item->harga_up     = $request->input('harga_up');
        $item->id_pesan     = $request->input('id_pesan');
        $item->kode_bar     = $request->input('kode_bar');
        $item->save();//tombol run sqlyog
        
        return redirect('/Pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailPemesanan  $detailPemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = detailPemesanan::find($id);
        $item->delete();
        return redirect('/Pemesanan');
    }
}
