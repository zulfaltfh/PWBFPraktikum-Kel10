<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;
use App\Models\session;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota             = Kota::all();

        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}

        if ($session==$z) 
        {
            return view('pemilik/Kota/kota', [
                'title' => 'Daftar Kota',
                'kota' => $kota
            ]);
        }
        else
        {
            return view('pegawai/Kota/kota', [
                'title' => 'Daftar Kota',
                'kota' => $kota
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

        return view('pegawai/Kota/tambah', [
            'title' => 'Tambah Kota',
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
        Kota::create([
            'nama_kota' => $request->nama_kota
        ]);

        return redirect('/Kota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kota = Kota::find($id);
        
        return view('pegawai/Kota/edit',[
            'title' => 'Edit Kota',
            'kota' => $kota
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kota::where('id', $id)->update([
            'nama_kota' => $request->nama_kota,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/kota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $item = Kota::find($id);
        $item->delete();
        return redirect('/Kota');
    }
}
