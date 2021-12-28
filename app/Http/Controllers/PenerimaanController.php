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
            return view('pemilik.Penerimaan.penerimaan', [
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
        $user   = User::all();
        $supplier = Supplier::all();

        $auth = session::all();
        $session = session::all()->where('role',1);
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
        {
            return view('pemilik.Penerimaan.insertPenerimaan', [
                'title'=>'Tambah Penerimaan Barang',
                'user' => $user,
                'supplier' => $supplier
            ]);
        }
        else
        {
            return view('pegawai.penerimaan.insertPenerimaan', [
                'title'=>'Tambah Penerimaan Barang',
                'user' => $user,
                'supplier' => $supplier
            ]);
        }
    }

    public function create(Request $request)
    {
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}

        $data = $request->input();//insert into
        
        $penerimaan = new Penerimaan();// table
        
        //value
        $penerimaan->id_user        = $data['id_user'];
        $penerimaan->id_sup         = $data['id_sup'];
        $penerimaan->total_harga    = $data['total_harga'];
        $penerimaan->status_terima  = $data['status_terima'];
        $penerimaan->save();

        return redirect('/Penerimaan');
    }

    public function edit(Request $request)
    {
        $user       = User::all();
        $supplier   = Supplier::all();

        $auth = session::all();
        $session = session::all()->where('role',1);
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        if ($session==$z) 
        {
            return view('pemilik.Penerimaan.editPenerimaan', [
                'title' => 'Edit Data Penerimaan',
                'user'  => $user,
                'supplier' => $supplier,
                'request'=>$request
            ]);
        }
        else
        {
            return view('pegawai.penerimaan.editPenerimaan', [
                'title' => 'Edit Data Penerimaan',
                'user'  => $user,
                'supplier' => $supplier,
                'request'=>$request
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}

        $data = $request->input();
        
        $item = Penerimaan::find($id);
        $item->id_user        = $data['id_user'];
        $item->id_sup         = $data['id_sup'];
        $item->total_harga    = $data['total_harga'];
        $item->status_terima  = $data['status_terima'];
        $item->save();

        return redirect('/Penerimaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Penerimaan::find($id);
        $item->delete();
        return redirect('/Penerimaan');
    }
}
