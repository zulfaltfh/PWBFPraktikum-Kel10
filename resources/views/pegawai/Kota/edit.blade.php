@extends('layout/layoutpegawai')
 
@section('content')

<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Kota</h1>
	<form action = "{{ url('/update-Kota',$request->id) }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='id' value="{{ $request->id }}"/>
					<label for="inputNamaKota" class="col-sm-2 col-form-label ">Nama Kota</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->nama_kota }}" value="{{ $request->nama_kota }}" class="form-control" id="inputNamaKota" name='nama_sup'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class="btn btn-primary" value = "Simpan"/>
	</form>
</div>
@endsection