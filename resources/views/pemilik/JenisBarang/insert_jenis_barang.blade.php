@extends('layout/layoutpegawai')

@section('content')
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-2 mb-4">Input Jenis Barang</h1>
		<form action = "{{ url('/create-JenisBarang') }}" method = "post">
			@csrf

			<div class="content">
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label ">Jenis Barang</label>
					<div class="col-sm-4">
					<input type="text" class="form-control" id="inputJenisBarang"  name='jenis_barang'>
					</div>
				</div>

				<input type ='submit' class = 'btn btn-primary mt-3' value = "Tambahkan"/>
			</div>
		</form>
	</div>
</main>

@endsection