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
        
        $session        = session::all()->where('role',1);
        $auth = session::all();
        $z = '[]';
        if($auth==$z)
        {
            return redirect('/');
        }

        if ($session==$z)
        {
            return view('pemilik/Supplier/supplier', [
                'title' => 'Data Supplier',
                'supplier' => $supplier
            ]);
        }
        else
        {
            return view('pegawai/Supplier/supplier', [
                'title' => 'Data Supplier',
                'supplier' => $supplier
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota = Kota::all();

        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}

        return view('pegawai.Supplier.tambah', [
            'title' => 'Tambah Data Supplier',
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
            'nama_sup' => $request->nama_sup,
            'alamat_sup' => $request->alamat_sup,
            'id_kota' => $request->kota,
            'telp_sup' => $request->telp_sup
        ]);

        return redirect('/Supplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $kota = Kota::all();
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}

        return view('pegawai.Supplier.edit', [
            'title' => 'Edit Data Supplier',
            'kota' => $kota,
            'request' => $request
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Supplier::find($id);
        
        $item->nama_sup         = $request->input('nama_sup');
        $item->alamat_sup       = $request->input('alamat_sup');
        $item->id_kota          = $request->input('kota');
        $item->telp_sup         = $request->input('telp_sup');
        $item->save();

        return redirect('/Supplier');
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
        return redirect('/Home');
    }
}
