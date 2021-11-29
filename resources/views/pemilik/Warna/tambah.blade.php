@extends('layout/layoutpegawai')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Tambah Data Warna</h1>
		<form action = "{{ url('/create-Warna') }}" method = "post">
			@csrf

			<div class="content">
				<div class="row mb-3">
					<label for="inputWarna" class="col-sm-2 col-form-label ">Warna</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" id="inputWarna"  name='warna'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>	
		</form>
	</div>

@endsection