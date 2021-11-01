@extends('layout/layoutpegawai')
 
@section('content')

<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Barang</h1>
	<form action = "{{ url('/update_barang_pegawai',$request->id) }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='id' value="{{ $request->id }}"/>
					<label for="inputNamaBarang" class="col-sm-2 col-form-label ">Nama Barang</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->nama_bar }}" class="form-control" id="inputNamaBarang" name='nama_bar'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <select class="form-select form-select-default" name="id_jb" aria-label=".form-select-default">
							@foreach($a as $item)
								<option value="{{ $item->id }}">{{ $item->jenis_barang }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputStokBarang" class="col-sm-2 col-form-label">Stok Barang</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->stock_barang }}" class="form-control" id="inputStokBarang"  name='stock_barang'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->harga_beli_bar }}" class="form-control" id="inputHargaBeli"  name='harga_beli_bar'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->harga_jual_bar }}" class="form-control" id="inputHargaJual" name='harga_jual_bar'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class="btn btn-primary" value = "Input Data"/>
	</form>
</div>
@endsection