<?php

namespace App\Http\Controllers;

use App\Models\modelbarang;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    public function insert(){
        // $table_barang = getURLList();
        return view('pegawai.insert_barang');
    }
    public function create(Request $request){
        $data = $request->input();
			
				$barang = new modelbarang;

                $barang->nama_bar = $data['nama_bar'];
                $barang->stock_barang = $data['stock_barang'];
                $barang->harga_beli_bar = $data['harga_beli_bar'];
                $barang->harga_jual_bar = $data['harga_jual_bar'];
				$barang->save();

                return redirect('homePegawai');
			
    }
    public function update(){
        // $table_barang = getURLList();
        return view('pegawai.update_barang');
    }
    public function delete($id){
        $item = modelbarang::find($id);
        $item->delete();
        return redirect('homePegawai');
    }

}
