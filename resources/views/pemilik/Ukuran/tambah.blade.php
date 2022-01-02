@extends('layout/layoutpemilik')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Tambah Data Ukuran</h1>
		<form action = "{{ url('/create-Ukuran') }}" method = "post">
			@csrf

			<div class="content">
				<div class="row mb-3">
					<label for="inputUkuran" class="col-sm-2 col-form-label ">Ukuran</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" id="inputUkuran"  name='ukuran'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>	
		</form>
	</div>

@endsection