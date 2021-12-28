@extends('layout/layoutpemilik')

@section('content')
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-2 mb-4">Input Kota</h1>
		<form action = "{{ url('/create-Kota') }}" method = "post">
			@csrf

			<div class="content">
				<div class="row mb-3">
					<label for="inputKota" class="col-sm-2 col-form-label ">Nama Kota</label>
					<div class="col-sm-4">
					<input type="text" class="form-control" id="inputKota"  name="nama_kota" required>
					</div>
				</div>

				<input type ='submit' class = 'btn btn-primary mt-3' value = "Tambahkan"/>
			</div>
		</form>
	</div>
</main>

@endsection