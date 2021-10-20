@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Input User Baru</h1>
    </div>
    <form action = "{{ url('/create_User_pegawai') }}" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name='username_user'/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name='password_user'/></td>
		</tr>
		<tr>
			<td>Nama User</td>
			<td><input type="text" name='nama_user'/></td>
		</tr>
		<tr>
			<td>Alamat User</td>
			<td><input type="text" name='alamat_user'/></td>
		</tr>
		<tr>
			<td>No.Telp</td>
			<td><input type="text" name='telp_user'/></td>
		</tr>
		<tr>
		<td>Kota User</td>
			<td>
				<select name="id_kota">
					@foreach($table_kota as $item)
				<option name="id_kota" value="{{ $item->id }}">
					<?php 
					if ($item->id==1){echo "SBY";} 
					if ($item->id==2){echo "JBG";} 
					?>
				</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
		<td>Role User</td>
			<td>
				<select name="id_role">
					@foreach($table_role as $item)
				<option name="id_role" value="{{ $item->id }}">
					<?php 
					if ($item->id==2){echo "Pemilik";} 
					if ($item->id==1){echo "Pegawai";} 
					?>
				</option>
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
</main>

@endsection