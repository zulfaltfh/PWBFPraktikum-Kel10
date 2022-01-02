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
        $detbar         = detailBarang::all()->where('kode_bar',$request['id']);
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
        {
            return view('pemilik.DetailBarang.detailbarang', [
                'title' => 'Detail Barang',
                'request'=> $request,
                'detbar' => $detbar,
                'role' => 'Pemilik',
            ]);
        }
        else
        {
            return view('pegawai.DetailBarang.detailbarang', [
                'request'=> $request,
                'title' => 'Detail Barang',
                'detbar' => $detbar,
                'role' => 'Pegawai',
            ]);
        }
    }


    public function insert(Request $request)
    {
        
        $ukuran = Ukuran::all();
        $warna = Warna::all();

        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
        {
            return view('pemilik.DetailBarang.insert_barang', [
                'title'=>'Tambah Detail Barang',
                'ukuran'=> $ukuran,
                'warna'=> $warna,
                'request'=> $request,
                'role' => 'Pemilik'
            ]);
        }
        else
        {
            return view('pegawai.DetailBarang.insert_barang',[
                'title'=>'Tambah Detail Barang',
                'ukuran'=> $ukuran,
                'warna'=> $warna,
                'request'=> $request,
                'role' => 'Pegawai'
            ]);
        }
    }

    public function create(Request $request) 
    {
        $data = $request->input();//insert into
        
        $detbarang = new detailBarang();// table
        
        //value
        $detbarang->kode_bar        = $data['kode_bar'];
        $detbarang->id_warna        = $data['id_warna'];
        $detbarang->id_ukuran       = $data['id_ukuran'];
        $detbarang->save();

        return redirect('/Home');
    }


    public function edit(Request $request)
    {
        $ukuran = Ukuran::all();
        $warna = Warna::all();

        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
        {
            return view('pemilik.DetailBarang.edit_barang', [
                'title'=>'Edit Detail Barang',
                'ukuran'=> $ukuran,
                'warna'=> $warna,
                'request'=> $request,
                'role' => 'Pemilik'
            ]);
        }
        else
        {
            return view('pegawai.DetailBarang.edit_barang',[
                'title'=>'Edit Detail Barang',
                'ukuran'=> $ukuran,
                'warna'=> $warna,
                'request'=> $request,
                'role' => 'Pegawai'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detailBarang  $detailBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = detailBarang::find($id);//insert into
        
        //value
        $data->kode_bar        = $request->input('kode_bar');
        $data->id_warna        = $request->input('id_warna');
        $data->id_ukuran       = $request->input('id_ukuran');
        $data->save();

        return redirect('/Home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detailBarang  $detailBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = detailBarang::find($id);
        $item->delete();
        return redirect('/Home');
    }
}
