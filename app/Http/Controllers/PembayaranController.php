<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use App\Models\session;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data           = Pembayaran::with('Penerimaan')->get();
        $session        = session::all()->where('role',1);
        $auth           = session::all();
        $z              = '[]';
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
         {
            return view('pemilik.pembayaran.pembayaran', [
                'title'=>'Pembayaran',
                'data'=>$data
            ]);
         }
        else
         {
            return view('pegawai.Pembayaran.pembayaran', [
                'title'=>'Pembayaran',
                'data'=>$data
            ]);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert()
    {
        $Penerimaan = Penerimaan::all();

        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}

        return view('pegawai.Pembayaran.insertPembayaran',[
            'title'=>'Tambah Data Pembayaran',
            'Penerimaan'=>$Penerimaan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $data = $request->input();//insert into
		
		$pembayaran = new Pembayaran();// table
        
        //value
        $pembayaran->id_terima     = $data['id_terima'];
        $pembayaran->tgl_bayar     = $data['tgl_bayar'];
        $pembayaran->total_bayar   = $data['total_bayar'];
		$pembayaran->save();//tombol run sqlyog

        return redirect('/Pembayaran');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}

        $a = Pembayaran::all();
        return view('pegawai.pembayaran.editPembayaran', [
            'title' => 'Edit Data Barang',
            'a'=>$a,
            'request'=>$request]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Pembayaran::find($id);

        $item->id_terima     = $request->input('id_terima');
        $item->tgl_bayar     = $request->input('tgl_bayar');
        $item->total_bayar   = $request->input('total_bayar');

        $item->save();
        return redirect('/Pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $item = Pembayaran::find($id);
        $item->delete();
        return redirect('/Pembayaran');
    }
}
