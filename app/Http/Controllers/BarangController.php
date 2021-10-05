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
        return view('insert_barang');
    }
    public function create(Request $request){
        $data = $request->input();
			try{
				$barang = new modelbarang;

                $barang->kode_bar = $data['kode_bar'];
                $barang->nama_bar = $data['nama_bar'];
                $barang->stock_barang = $data['stock_barang'];
                $barang->harga_beli_bar = $data['harga_beli_bar'];
                $barang->harga_jual_bar = $data['harga_jual_bar'];
				$barang->save();
				return redirect('index')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
    }
}
