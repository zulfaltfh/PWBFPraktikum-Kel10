@extends('layout/layoutpegawai')

@section('content')
    
	<div class="container-fluid px-4">
    	<h1 class="mt-2 mb-4">Edit Detail Penerimaan</h1>
		<form action = "{{ url('/update-DetailPenerimaan',$request->id) }}" method = "post">
			@csrf
			<div class="content">
				<div class="row mb-3">

					<input type="hidden" class="form-control" name='id' value="{{ $request->id }}"/>
					<input type="hidden" class="form-control" name='id_terima' value="{{ $request->id_terima }}"/>

					<label for="inputNamaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
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
					  <input type="text" placeholder="{{ $request->harga_his }}" value="{{ $request->harga_his }}" class="form-control" name='harga_his'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Jumlah</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->jumlah_his }}" value="{{ $request->jumlah_his }}" class="form-control" name='jumlah_his'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Subtotal</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->sub_total }}" value="{{ $request->sub_total }}" class="form-control" name='sub_total'>
					</div>
				</div>
			</div>
			
			<input type = 'submit' class = 'btn btn-primary' value = "Tambahkan"/>	
		</form>
	</div>

@endsection