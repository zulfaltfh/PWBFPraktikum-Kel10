@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Input Barang Baru</h1>
    </div>
    <form action = "{{ url('/create_barang_pegawai') }}" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name='nama_bar'/></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td>
				<select name="id_jb">
					@foreach($table_jenis_barang as $item)
				<option name="id_jb" value="{{ $item->id }}">{{ $item->jenis_barang }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>Stok Barang</td>
			<td><input type="text" name='stock_barang'/></td>
		</tr>
		<tr>
			<td>Harga Beli</td>
			<td><input type="text" name='harga_beli_bar'/></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td><input type="text" name='harga_jual_bar'/></td>
		</tr>
		<tr>
			<td colspan = '2'>
			<input type = 'submit' value = "Input Data"/></td>
		</tr>
	</table>
</form>
</main>

@endsection