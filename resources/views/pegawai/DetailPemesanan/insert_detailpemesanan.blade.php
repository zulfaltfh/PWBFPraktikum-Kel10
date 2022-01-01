@extends('layout/layoutpegawai')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Input Detail Pemesanan</h1>
		<form action = "{{ url('/create-DetailPemesanan') }}" method = "post">
			@csrf
			<div class="content">
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Nama Barang</label>
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <select class="form-select form-select-default" name="nama_bar" aria-label=".form-select-default">
							@foreach($table_barang as $item)
								<option value="{{ $item->id }}">{{ $item->nama_bar }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputStokBarang" class="col-sm-2 col-form-label">Jumlah</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" name='jumlah_up'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Harga</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" name='harga_up'>
					</div>
				</div>
				<input type="hidden" name="id_pesan" value="{{ $request->id_pesan }}">
				
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>	
		</form>
	</div>

@endsection