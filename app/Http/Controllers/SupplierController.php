<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\session;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::with('Kota')->get();
         
        $auth = session::all();
        $z = '[]';
        if($auth==$z)
        {
            return redirect('/');
        }

        return view('/Supplier/supplier', [
            'supplier' => $supplier
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();

        return view('Pegawai/Create-Supplier', [
            'kota' => $kota
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supplier::create([
            'Nama' => $request->nama_sup,
            'Alamat' => $request->alamat_sup,
            'Kota' => $request->nama_kota,
            'Telepon' => $request->telp_sup
        ]);

        return redirect('/Pegawai/Data-Supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $item = Supplier::find($id);
        $item->delete();
        return redirect('homePegawai');
    }
}
