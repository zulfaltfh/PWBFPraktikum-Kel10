@extends('layout/layoutpemilik')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Edit Detail Barang</h1>
		<form action = "{{ url('/update-DetailBarang',$request->id) }}" method = "post">
			@csrf

			<div class="content">
				<input type="hidden" name="kode_bar" value="{{ $request->id }}">
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Ukuran</label>
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <select class="form-select form-select-default" name="id_ukuran" aria-label=".form-select-default">
							@foreach($ukuran as $item)
								<option value="{{ $item->id }}">{{ $item->ukuran }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Warna</label>
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <select class="form-select form-select-default" name="id_warna" aria-label=".form-select-default">
							@foreach($warna as $item)
								<option value="{{ $item->id }}">{{ $item->warna }}</option>
							@endforeach
						  </select>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Simpan"/>	
		</form>
	</div>

@endsection