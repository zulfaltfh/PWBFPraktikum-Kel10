@extends('layout/layoutlog')

@section('log')

    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h2 class="card-title text-center">SISTEM INFORMASI</h2>
                <h2 class="card-title text-center">FANCY BOUTIQUE</h2>
            </div>
            <div class="card-text mt-2">
                <form action="{{ url('/a') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="session" value="1" hidden="">
                        <input type="text" name="username" class="form-control" id="username" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="id" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" value="remember-me">
                      <label class="form-check-label">Remember me</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <br>
                    <center>
                        <p style="color:#242424">Belum punya akun ? Silahkan <a href="{{ url('/input_User') }}">registrasi</a></p>
                    </center>
                  </form>
            </div>
        </div>
    </div>
@endsection