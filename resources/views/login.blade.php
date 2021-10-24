<!DOCTYPE html>
{{-- <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Pengadaan Barang Fancy Boutique</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/logincss.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="align">

      <div class="grid">

        <form action="{{url('/signin')}}" method="post" class="form login">
          @csrf
          <div class="form__field">
            <label for="login__username"><svg class="icon">
                <use xlink:href="#icon-user"></use>
              </svg><span class="hidden">Username</span></label>
            <input autocomplete="username" id="login__username" type="text" name="nama_user" class="form__input" placeholder="Username" required>
          </div>

          <div class="form__field">
            <label for="login__password"><svg class="icon">
                <use xlink:href="#icon-lock"></use>
              </svg><span class="hidden">Password</span></label>
            <input id="login__password" type="password" name="password_user" class="form__input" placeholder="Password" required>
          </div>

          <div class="form__field">
            <input type="submit" value="Sign In">

          </div>

        </form>
        <p class="text--center">Not a member? <a href="#">Sign up now</a> <svg class="icon">
            <use xlink:href="#icon-arrow-right"></use>
          </svg></p>

      </div>
        <br><a href="{{ url('/homePegawai')}}"><input type="submit" class="button" value="Sign In as Pegawai"></a>
        <br><a href="{{ url('/homePemilik')}}"><input type="submit" class="button" value="Sign In as Pemilik"></a>
      <svg xmlns="http://www.w3.org/2000/svg" class="icons">
        <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
          <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
        </symbol>
        <symbol id="icon-lock" viewBox="0 0 1792 1792">
          <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
        </symbol>
        <symbol id="icon-user" viewBox="0 0 1792 1792">
          <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
        </symbol>
      </svg>
    </body>
</html> --}}

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sistem Informasi Pengadaan Barang Fancy Boutique</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/login.css">

  </head>

  <body class="text-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="title" style="align-content: center">
          <h2>Sistem Informasi Pengadaan Barang</h2>
          <h2>Fancy Boutique</h2>
        </div>
        <div class="col-md-5">
          <main class="form-signin">
            <h1 class="h4 mb-3 fw-normal">Login</h1>
            <form action="/" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control" name="nomor ID" id="email" placeholder="name@example.com" autofocus required>
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
    
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg " style="background-color: #ea4c88" type="submit">Login</button>
            </form>
          </main>
  
        </div>
      </div>
    </div>
    


  </body>
</html>
