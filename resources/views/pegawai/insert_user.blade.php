@extends('layout/layoutlog')

@section('log')

<div class="container">
	<div class="row justify-content-center">
	  <div class="title" style="align-content: center">
		<h2>Sistem Informasi Pengadaan Barang</h2>
		<h2>Fancy Boutique</h2>
	  </div>
	  <div class="col-md-5">
		<main class="form-signin">			
			<h1 class="h4 mb-3 fw-normal">Register</h1>
            <form action="{{ url('/create_User_pegawai') }}" method="POST">
              @csrf
              <div class="form-floating">
                <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="nama_user" autofocus required>
                <label for="floatingInput">Nama Anda</label>
              </div> 
              <br>
              <div class="form-floating">
                <input type="text" name="email" class="form-control" name="nomor ID" id="email" placeholder="name@example.com"  required>
                <label for="floatingInput">Email</label>
              </div>
			  <br>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                <label for="floatingPassword">username</label>
              </div> 
			  <br>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
			  
              
			  <br>
              <div class="form-floating">
                <input type="text" name="alamat_user" class="form-control" id="alamat_user" placeholder="alamat_user" required>
                <label for="floatingInput">Alamat User</label>
              </div> 
			  <br>
              <div class="form-floating">
                <input type="text" name="telp_user" class="form-control" id="telp_user" placeholder="telp_user" required>
                <label for="floatingInput">Telp User</label>
              </div> 
			  <br>
              <div class="form-floating">
				<p style="color:white">Kota</p>
              <select class="form-select form-select-default" name="id_kota" aria-label=".form-select-default">
                @foreach($table_kota as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_kota }}</option>
                @endforeach
              </select>
                <label for="floatingInput">Kota</label>
              </div> 
			  <br>
              <div class="form-floating">
                <p style="color:white">Role</p>
                <select class="form-select form-select-default" name="id_role" aria-label=".form-select-default">
                  @foreach($table_role as $item)
                    <option value="{{ $item->id }}">{{ $item->role }}</option>
                  @endforeach
                </select>
                <label for="floatingInput">Role</label>
              </div> 
    
        </div>
              <button class="w-100 btn btn-lg " style="background-color: #ea4c88" type="submit">Register</button><br>
            </form>
		</main>
  
	</div>
  </div>
</div>
@endsection