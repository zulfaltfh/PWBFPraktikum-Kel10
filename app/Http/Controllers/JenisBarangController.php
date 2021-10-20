<?php

namespace App\Http\Controllers;

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
        $a = jenisBarang::all();
        return view('pegawai.jenis_barang', ['a'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $request->input();
        $barang = new jenisBarang;
        $barang->id_jb          = $data['id_jb'];
        $barang->jenis_barang   = $data['jenis_barang'];
        $barang->save();

        return redirect('homePegawai');
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
        return redirect('Jenis_Barang_Pegawai');
    }
}
