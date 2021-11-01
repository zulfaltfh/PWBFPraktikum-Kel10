@extends('layout/layoutpegawai')
 
@section('content')
<form action = "{{ url('/update_barang_pegawai',$request->id) }}" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
		<tr>
			<td><input type="text" hidden="" name='id' value="{{ $request->id }}" /></td>
			
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" placeholder="{{ $request->nama_bar }}" name='nama_bar'/></td>
		</tr>
		<tr>
			<td>Stok Barang</td>
			<td><input type="text" placeholder="{{ $request->stock_barang }}" name='stock_barang'/></td>
		</tr>
		<tr>
			<td>Harga Beli</td>
			<td><input type="text" placeholder="{{ $request->harga_beli_bar }}" name='harga_beli_bar'/></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td><input type="text" placeholder="{{ $request->harga_jual_bar }}" name='harga_jual_bar'/></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td>
				<select name="id_jb">
					@foreach($a as $b)
				<option name="id_jb" value="{{ $b->id }}">{{ $b->jenis_barang }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td colspan = '2'>
			<input type = 'submit' value = "Input Data"/></td>
		</tr>
	</table>
</form>
@endsection