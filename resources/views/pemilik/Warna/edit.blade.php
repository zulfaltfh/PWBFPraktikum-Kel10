@extends('layout/layoutpemilik')
 
@section('content')

<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Warna</h1>
	<form action = "{{ url('/update-Warna',$request->id) }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='id' value="{{ $request->id }}"/>
					<label for="inputWarna" class="col-sm-2 col-form-label ">Warna</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->warna }}" value="{{ $request->warna }}" class="form-control" id="inputWarna" name='warna'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class="btn btn-primary" value = "Simpan"/>
	</form>
</div>
@endsection