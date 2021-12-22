<?php

namespace App\Http\Controllers;
 
use App\Models\modelbarang;
use App\Models\session;
use App\Models\jenisBarang;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    public function index()
    {
        $table_barang   = modelbarang::all();//data untuk ditampilkan
        $auth           = session::all();//kunci
        $session        = session::all()->where('role',1);//menentukan role
        $z              = '[]';//null

        if($auth==$z){return redirect('/');}
        if ($session==$z)
        {
            return view('pemilik.barang.barang', [
            	'title' => 'Data Barang',
            	'table_barang'=>$table_barang,
                'role' => 'Pemilik',
                'auth' => $auth
            ]);
        }
        else
        {
            return view('pegawai.barang.barang', [
                'title' => 'Data Barang',
                'table_barang'=>$table_barang,
                'role' => 'Pegawai',
                'auth' => $auth
            ]);
         }
            
    }
    // public function tes($id)
    // {
    //     $item = modelbarang::find($id);
    //     return view('pegawai.tes');
    // }

    public function insert()
    {
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        
        $table_jenis_barang = jenisBarang::all();
        return view('pegawai.barang.insert_barang', [
            'title' => 'Tambah Data Barang',
            'table_jenis_barang' => $table_jenis_barang
        ]);
    }

    public function create(Request $request){
        $file = $request->file('foto');
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file->move($target_dir,$file->getClientOriginalName());
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["foto"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        };


        $data = $request->input();//insert into
		
		$barang = new modelbarang;// table
        
        //value
        $barang->foto           = basename($_FILES["foto"]["name"]);
        $barang->nama_bar       = $data['nama_bar'];
        $barang->stock_barang   = $data['stock_barang'];
        $barang->harga_beli_bar = $data['harga_beli_bar'];
        $barang->harga_jual_bar = $data['harga_jual_bar'];
        $barang->id_jb          = $data['id_jb'];
		$barang->save();//tombol run sqlyog

        return redirect('/Home');
			
    }

    public function edit(Request $request){
        $a = jenisBarang::all();
        $auth = session::all();
        $z = '[]';//null
        if($auth==$z){return redirect('/');}
        
        return view('pegawai.barang.edit_barang', [
            'title' => 'Edit Data Barang',
            'a'=>$a,
            'request'=>$request]);
    }

    public function update(Request $request,$id){
        $item = modelbarang::find($id);
        
        $item->nama_bar         = $request->input('nama_bar');
        $item->stock_barang     = $request->input('stock_barang');
        $item->harga_beli_bar   = $request->input('harga_beli_bar');
        $item->harga_jual_bar   = $request->input('harga_jual_bar');
        $item->id_jb            = $request->input('id_jb');
        $item->save();
        
        return redirect('/Home');
    }
    
    public function destroy($id){
        $item = modelbarang::find($id);
        $item->delete();
        return redirect('/Home');
    }

}
