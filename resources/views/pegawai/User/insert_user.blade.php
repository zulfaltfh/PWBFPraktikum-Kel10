@extends('layout/layoutpegawai')

@section('content')
    
  <div class="container-fluid px-4">
      <h1 class="mt-2 mb-4">Input Barang Baru</h1>
    <form action = "{{ url('/create-Barang') }}" method = "post">
      @csrf

      <div class="content">
        <div class="row mb-3">
          <label for="inputNamaUser" class="col-sm-2 col-form-label ">Nama Lengkap</label>
          <div class="col-sm-4">
             <input type="text" name="nama_user" class="form-control" id="inputNamaUser" autofocus required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputAlamat" class="col-sm-2 col-form-label ">Alamat</label>
          <div class="col-sm-4">
             <input type="text" name="alamat_user" class="form-control" id="inputAlamat" autofocus required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputNoTelepon" class="col-sm-2 col-form-label ">No Telepon</label>
          <div class="col-sm-4">
             <input type="text" name="telp_user" class="form-control" id="inputNoTelepon" autofocus required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputJenisBarang" class="col-sm-2 col-form-label">Kota</label>
          <div class="col-sm-4">
              {{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
              <select class="form-select form-select-default" name="id_kota" aria-label=".form-select-default">
              @foreach($table_kota as $item)
                <option value="{{ $item->id }}">{{ $item->kota }}</option>
              @endforeach
              </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputStokBarang" class="col-sm-2 col-form-label">Stok Barang</label>
          <div class="col-sm-4">
            <input type="text" name="email" class="form-control" name="nomor ID" id="email" placeholder="name@example.com"  required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputHargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputHargaBeli"  name='harga_beli_bar'>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputHargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="inputHargaJual" name='harga_jual_bar'>
          </div>
        </div>
      </div>
      
      <input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>  
    </form>
  </div>

@endsection