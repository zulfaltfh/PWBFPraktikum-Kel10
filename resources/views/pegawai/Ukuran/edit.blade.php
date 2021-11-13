@extends('layout/layoutpegawai')
 
@section('content')

<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Ukuran</h1>
	<form action = "{{ url('/update-Ukuran',$request->id) }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='id' value="{{ $request->id }}"/>
					<label for="inputUkuran" class="col-sm-2 col-form-label ">Ukuran</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->ukuran }}" value="{{ $request->ukuran }}" class="form-control" id="inputUkuran" name='ukuran'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class="btn btn-primary" value = "Simpan"/>
	</form>
</div>
@endsection