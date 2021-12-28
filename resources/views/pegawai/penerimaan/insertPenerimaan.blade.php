@extends('layout/layoutpegawai')
 
@section('content')

<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Tambah Data Penerimaan</h1>
	<form action = "{{ url('/create-Penerimaan') }}" method = "post" enctype="multipart/form-data">
		@csrf
			<div class="content">
				<div class="row mb-3">
					<label for="inputNamaPenerima" class="col-sm-2 col-form-label ">Penerima</label>
					<div class="col-sm-4">
						<select class="form-select form-select-default" name="id_user" aria-label=".form-select-default">
						@foreach ($user as $item)
							<option value="{{ $item->id }}">{{ $item->nama_user }}</option>
						@endforeach
            </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputNamaPngirim" class="col-sm-2 col-form-label">Pengirim</label>
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <select class="form-select form-select-default" name="id_sup" aria-label=".form-select-default">
							@foreach($supplier as $item)
								<option value="{{ $item->id }}">{{ $item->nama_sup }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputTotal" class="col-sm-2 col-form-label">Total Harga</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" id="inputTotal"  name='total_harga' required>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputStatus" class="col-sm-2 col-form-label">Status Terima</label>
					<div class="col-sm-4">
            <select class="form-select form-select-default" name="status_terima" aria-label=".form-select-default">
								<option value="0">Terima</option>
                <option value="1">Tidak Diterima</option>
						</select>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class="btn btn-primary" value = "Tambahkan"/>
	</form>
</div>
@endsection