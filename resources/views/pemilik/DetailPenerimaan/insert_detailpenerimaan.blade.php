@extends('layout/layoutpemilik')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Input Detail Penerimaan</h1>
		<form action = "{{ url('/create-DetailPenerimaan') }}" method = "post">
			@csrf
			<div class="content">
				<div class="row mb-3">
					<label for="inputIdTerima" class="col-sm-2 col-form-label">ID Terima</label>
					<div class="col-sm-4">
					  <input type="text" name="id_terima" value="{{ $request->id_terima }}" placeholder="{{ $request->id_terima }}">
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Nama Barang</label>
					<div class="col-sm-4">
						  <select class="form-select form-select-default" name="nama_bar" aria-label=".form-select-default">
							@foreach($table_barang as $item)
								<option value="{{ $item->id }}">{{ $item->nama_bar }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaHistory" class="col-sm-2 col-form-label">Harga</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" name='harga_his'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Jumlah</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" name='jumlah_his'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Subtotal</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" name='sub_total'>
					</div>
				</div>
				
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>	
		</form>
	</div>

@endsection