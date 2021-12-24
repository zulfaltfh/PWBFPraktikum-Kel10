<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\session;

class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data           = Penerimaan::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.penerimaan.penerimaan', [
                'title'=>'Penerimaan Barang',
                'data'=>$data
            ]);
         }
        else
         {
            return view('pegawai.penerimaan.penerimaan', [
                'title'=>'Penerimaan Barang',
                'data'=>$data
            ]);
         }
    }

    public function insert()
    {
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}

        $user   = User::all();
        $supplier = Supplier::all();
        return view('',[
            'title'=>'Tambah Penerimaan Barang',
            'user' => $user,
            'supplier' => $supplier
        ]);
    }

    public function create(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerimaan $penerimaan)
    {
        //
    }
}
