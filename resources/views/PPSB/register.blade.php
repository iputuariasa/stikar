<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/css/login.css" rel="stylesheet">

  </head>
  <body class="text-center">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="/PPSB/register" method="post" class="py-4 px-4 shadow rounded row g-3 bg-white">
                    @csrf
                    
                    <div class="col-12">
                        <img class="mb-4" src="/img/logoSMKTI.png" alt="" width="120px" class="iconStikar">
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success mt-2" role="alert">
                            {{ session('success') }} <a href="/login" class="text-decoration-none">Login</a>
                        </div>
                    @endif
                    
                    <input type="hidden" name="role" value="Siswa">
                    <input type="hidden" name="slug" id="slug">
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputNama" placeholder="nama" name="nama" value="{{ old('nama') }}" required autofocus>
                        <label for="inputNama">Nama</label>
                        @error('nama')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control @error('new_student_id') is-invalid @enderror" id="inputNISN" placeholder="new_student_id" name="new_student_id" value="{{ old('new_student_id') }}" required autofocus>
                        <label for="inputNISN">NISN</label>
                        @error('new_student_id')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12 form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="inputEmail">Email</label>
                        @error('email')
                        <div class="invalid-feedback text-start">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-floating">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="PasswordInput" placeholder="Password">
                        <label for="PasswordInput">Password</label>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="col-md-6 form-floating">
                        <input name="password_confirmation" type="password" class="form-control" id="confirmPasswordInput" placeholder="Konfirmasi Password">
                        <label for="confirmPasswordInput">Konfirmasi Password</label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Register</button>
                      <small class="mt-5 mb-3 text-muted">&copy; 2022 Pusat Komputer dan Jaringan SMK TI Bali Global Karangasem</small>
                      @if (session()->has('loginError'))
                        <div class="alert alert-danger mt-2" role="alert">
                        {{ session('loginError') }}
                        </div>
                      @endif
                </form>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
