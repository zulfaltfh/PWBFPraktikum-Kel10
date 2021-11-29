<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\session;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data           = Pemesanan::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.Pemesanan.Pemesanan', ['data'=>$data,'title' => 'Data Pemesanan']);
         }
        else
         {
            return view('pegawai.Pemesanan.Pemesanan', ['data'=>$data,'title' => 'Data Pemesanan']);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->input();//insert into
        
        $Pemesanan = new Pemesanan;// table
        
        //value
        $Pemesanan->status_pesan  = $data['status_pesan'];
        $Pemesanan->id_sup        = $data['id_sup'];
        $Pemesanan->id_user       = $data['id_user'];
        $Pemesanan->save();//tombol run sqlyog

        return redirect('/Pemesanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        $sup            = Supplier::all();
        $user           = User::all();
        $data           = Pemesanan::all();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.Pemesanan.InputPemesanan', ['data'=>$data,'user'=>$user,'sup'=>$sup,'title' => 'Data Pemesanan']);
         }
        else
         {
            return view('pegawai.Pemesanan.InputPemesanan', ['data'=>$data,'user'=>$user,'sup'=>$sup,'title' => 'Data Pemesanan']);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $item = Pemesanan::find($id);
        $item->delete();
        return redirect('Pemesanan');
    }
}
