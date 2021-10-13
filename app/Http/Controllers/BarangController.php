<?php

namespace App\Http\Controllers;

use App\Models\modelbarang;
use App\Models\jenisBarang;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    public function home()
    {
        $table_barang = modelbarang::all();
        return view('pegawai.index', ['table_barang'=>$table_barang]);
    }
    public function insert()
    {
        $table_jenis_barang = jenisBarang::all();
        return view('pegawai.insert_barang', ['table_jenis_barang'=>$table_jenis_barang]);
    }
    public function create(Request $request){
        $data = $request->input();
			
		$barang = new modelbarang;

        $barang->nama_bar       = $data['nama_bar'];
        $barang->stock_barang   = $data['stock_barang'];
        $barang->harga_beli_bar = $data['harga_beli_bar'];
        $barang->harga_jual_bar = $data['harga_jual_bar'];
        $barang->id_jb          = $data['id_jb'];
		$barang->save();

        return redirect('homePegawai');
			
    }
    public function edit($id){
        $items = modelbarang::find($id); 

        return view('pegawai.update_barang', ['items'=>$items], compact('items'));
    }
    public function update(Request $request,$id){
        $item = modelbarang::find($id);
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $item->update($request->all());

        return redirect('homePegawai');
    }
    public function destroy($id){
        $item = modelbarang::find($id);
        $item->delete();
        return redirect('homePegawai');
    }

}
