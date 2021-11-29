@extends('layout/layoutpegawai')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Tambah Data Supplier</h1>
		<form action = "{{ url('/create-Supplier') }}" method = "post">
			@csrf

			<div class="content">
				<div class="row mb-3">
					<label for="inputNamaSupplier" class="col-sm-2 col-form-label ">Perusahaan</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" id="inputNamaSupplier"  name='nama_sup'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputAlamatSupplier" class="col-sm-2 col-form-label">Alamat</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" id="inputAlamatSupplier"  name='alamat_sup'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputNamaKota" class="col-sm-2 col-form-label">Kota</label>
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <select class="form-select form-select-default" name="kota" aria-label=".form-select-default">
							@foreach($kota as $item)
								<option value="{{ $item->id }}">{{ $item->nama_kota }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputNoTelepon" class="col-sm-2 col-form-label">Telepon</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" id="inputNoTelepon"  name='telp_sup'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>	
		</form>
	</div>

@endsection