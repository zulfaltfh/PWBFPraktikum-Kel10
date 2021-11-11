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
            return view('pemilik.Barang.datailpemesanan', ['data'=>$data]);
         }
        else
         {
            return view('pegawai.Barang.datailpemesanan', ['data'=>$data]);
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
     * @param  \App\Models\detailPenerimaan  $detailPenerimaan
     * @return \Illuminate\Http\Response
     */
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
