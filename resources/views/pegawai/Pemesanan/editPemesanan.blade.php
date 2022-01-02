@extends('layout/layoutpegawai')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Edit Data Pemesanan</h1>
		<form action = "{{ url('/update-Pemesanan', $request->id) }}" method = "post">
			@csrf

			<div class="content">
				<input hidden name='status_pesan' value="0">
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">User</label>
					<div class="col-sm-4">
						  <select class="form-select form-select-default" value="{{ $request->id_user }}" name="id_user" aria-label=".form-select-default">
							@foreach($user as $item)
								<option value="{{ $item->id }}" >{{ $item->nama_user }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Supplier</label>
					<div class="col-sm-4">
						  <select class="form-select form-select-default" value="{{ $request->id_sup }}" name="id_sup" aria-label=".form-select-default">
							@foreach($supplier as $item)
								<option value="{{ $item->id }}">{{ $item->nama_sup }}</option>
							@endforeach
						  </select>
					</div>
				</div>
			</div>
			<input type = 'submit' class = 'btn btn-primary' value = "Simpan"/>	
		</form>
	</div>

@endsection