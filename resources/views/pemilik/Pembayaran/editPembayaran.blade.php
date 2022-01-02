@extends('layout/layoutpemilik')
 
@section('content')

<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Data Pembayaran</h1>
	<form action = "{{ url('/update-Pembayaran',$request->id) }}" method = "post" enctype="multipart/form-data">
		@csrf
			<div class="content">
				{{--  <!-- <div class="row mb-3">
					<label for="inputIdTerima" class="col-sm-2 col-form-label ">Kode Penerimaan</label>
					<div class="col-sm-4">
            <select class="form-select form-select-default" name="id_terima" aria-label=".form-select-default">
              @foreach ($Penerimaan as $item)
                <option value="{{ $item->id }}">{{ $item->id }}</option>
              @endforeach
              </select>
					</div>
				</div> -->  --}}
				<input type="hidden" name="id_terima" value="{{ $request->id }}">
				{{--  <!-- <div class="row mb-3">
					<label for="inputTglBayar" class="col-sm-2 col-form-label">Tanggal Pembayaran</label>
					<div class="col-sm-4">
            <input type="date" class="form-control" id="inputTglBayar"  name='tgl_bayar' required>
					</div>
				</div> -->  --}}
				<div class="row mb-3">
					<label for="inputTotal" class="col-sm-2 col-form-label">Total Pembayaran</label>
					<div class="col-sm-4">
					  <input type="number" class="form-control" id="inputTotal"  placeholder="{{ $request->total_bayar }}" value="{{ $request->total_bayar }}" name='total_bayar' required>
					</div>
				</div>
			</div>
			<input type="hidden" name="status_terima" value="1">
			
			<input type = 'submit' class="btn btn-primary" value = "Simpan"/>
	</form>
</div>
@endsection