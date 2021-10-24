@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Input User Baru</h1>
    </div>
    <form action = "{{ url('/create_Role_pegawai') }}" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
		<tr>
			<td>Jenis Role</td>
			<td><input type="text" name='jenis_role'/></td>
		</tr>
		<tr>
			<td colspan = '2'>
			<input type = 'submit' value = "Input Data"/></td>
		</tr>
	</table>
</form>
</main>

@endsection