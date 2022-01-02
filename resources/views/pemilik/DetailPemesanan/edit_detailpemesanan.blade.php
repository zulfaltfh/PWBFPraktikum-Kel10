@extends('layout/layoutpemilik')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Edit Detail Pemesanan</h1>
		<form action = "{{ url('/update-DetailPemesanan',$request->id) }}" method = "post">
			@csrf
			<div class="content">
				<div class="row mb-3">
					{{-- <label for="inputJenisBarang" class="col-sm-2 col-form-label">Nama Barang</label> --}}
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <input type="hidden" class="form-control" name='kode_bar' value="{{ $request->kode_bar }}"/>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputStokBarang" class="col-sm-2 col-form-label">Jumlah</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->jumlah_up }}" value="{{ $request->jumlah_up }}" class="form-control" name='jumlah_up'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Harga</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->harga_up }}" value="{{ $request->harga_up }}" class="form-control" name='harga_up'>
					</div>
				</div>
				<input type="hidden" name="id" value="{{ $request->id }}">
				<input type="hidden" name="id_pesan" value="{{ $request->id_pesan }}">
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>	
		</form>
	</div>

@endsection