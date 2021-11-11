<?php

namespace App\Http\Controllers;

use App\Models\detailBarang;
use Illuminate\Http\Request;
use App\Models\session;

class DetailBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data           = detailBarang::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.Barang.datailbarang', ['data'=>$data]);
         }
        else
         {
            return view('pegawai.Barang.datailbarang', ['data'=>$data]);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\detailBarang  $detailBarang
     * @return \Illuminate\Http\Response
     */
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
