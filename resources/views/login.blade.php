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
            <h1 class="h4 mb-3 fw-normal">Login</h1>
            <form action="{{ url('/a') }}" method="POST">
              @csrf
              <div class="form-floating">
                <input type="text" name="email" class="form-control" name="nomor ID" id="email" placeholder="name@example.com" autofocus required>
                <label for="floatingInput">Email</label>
              </div>
              <br>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
    
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg " style="background-color: #ea4c88" type="submit">Login</button><br>
              <br><p style="color:white">Belum punya akun ? Silahkan <a href="{{ url('/input_User_pegawai') }}">register</a> :D</p>
              
            </form>
          </main>
  
        </div>
      </div>
    </div>
    

    @endsection
