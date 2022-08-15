@extends('operator.layouts.main')

@section('container')
        <div class="row pt-3">
            <div class="col-12">
            <h4 class="text-primary">Biodata</h4>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-4 pb-2">
                <div class="card position-relative" style="width: 100%;">
                    <img src="/img/imgCard.jpg" class="card-img-top mb-5" alt="...">
                    <div class="card-body text-center mb-4">
                    <span class="d-block fs-5 fw-semibold">{{ auth()->user()->nama }}</span>
                    <span class="fs-6 fw-semibold">{{ auth()->user()->email }}</span>
                    </div>
                    <div class="image-circle position-absolute top-50 start-50 translate-middle img-fluid box-imgProfil">
                    <img src="{{ asset('storage/'.auth()->user()->foto) }}" alt="" class="bg-primary rounded-circle img-fluid w-100">
                    </div>
                </div>
            </div>
            <div class="col-lg-8 bg-white p-3">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session('passwordError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('passwordError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-biodata-tab" data-bs-toggle="tab" data-bs-target="#nav-biodata" type="button" role="tab">Biodata</button>

                      <button class="nav-link" id="nav-ubahBiodata-tab" data-bs-toggle="tab" data-bs-target="#nav-ubahBiodata" type="button" role="tab">Ubah Biodata</button>
    
                      <button class="nav-link" id="nav-ubahPassword-tab" data-bs-toggle="tab" data-bs-target="#nav-ubahPassword" type="button" role="tab">Ubah Password</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-biodata" role="tabpanel" aria-labelledby="nav-biodata-tab" tabindex="0">
                        <div class="card-body box-detailAdmin">
                            <table class="fs-6 w-100">
                                <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ auth()->user()->jabatan }}</td>
                                </tr>
                                <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ auth()->user()->jk }}</td>
                                </tr>
                                <tr>
                                <td>Telepon</td>
                                <td>:</td>
                                <td>{{ auth()->user()->telepon }}</td>
                                </tr>
                                <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ auth()->user()->jk }}</td>
                                </tr>
                                <tr>
                                <td>Role</td>
                                <td>:</td>
                                <td>{{ auth()->user()->role }}</td>
                                </tr>
                                <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ auth()->user()->alamat }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-ubahBiodata" role="tabpanel" aria-labelledby="nav-ubahBiodata-tab" tabindex="0">
                        <form action="/biodataOperator" method="post" class="p-2" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              @if (session()->has('errorPassword'))
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ session('errorPassword') }}
                                </div>
                              @endif
                            </div>
                            <div class="mb-3 text-center d-flex justify-content-center">
                                <div class="image-circle img-fluid box-imgProfil d-flex justify-content-center">
                                  @if (auth()->user()->foto)
                                      <img src="{{ asset('storage/'.auth()->user()->foto) }}" alt="" class="bg-primary rounded-circle img-fluid w-100 img-preview">
                                  @else
                                    <img class="bg-primary rounded-circle img-fluid w-100 img-preview">
                                  @endif
                                </div>
                            </div>
                            <div class="input mb-3">
                                <label for="foto" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto" onchange="previewImage()">
                                @error('foto')
                                  <div class="invalid-feedback">
                                      {{ $message }}
                                  </div>
                                @enderror
                            </div>
      
                            <input type="hidden" name="oldFoto" value="{{ auth()->user()->foto }}">
                            <input type="hidden" name="id" value="{{ auth()->user()->id }}">

                            <div class="mb-3">
                              <label for="nama" class="form-label">Nama Lengkap</label>
                              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', auth()->user()->nama) }}">
                              @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control disabled @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                              @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                  <div class="form-check">
                                    @if (old('jk', auth()->user()->jk ) == 'Laki-laki')
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki">
                                    @endif
                                    <label class="form-check-label" for="laki-laki">
                                      Laki-laki
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    @if (old('jk', auth()->user()->jk) == 'Perempuan')
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
                                    @endif
                                    <label class="form-check-label" for="perempuan">
                                      Perempuan
                                    </label>
                                  </div>
                                  @error('jk')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                  @enderror
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon', auth()->user()->telepon) }}">
                                @error('telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan', auth()->user()->jabatan) }}">
                                @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                  <div class="form-check">
                                    @if (old('role', auth()->user()->role ) == 'Admin')
                                        <input class="form-check-input" type="radio" name="role" id="admin" value="Admin" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="role" id="admin" value="Admin">
                                    @endif
                                    <label class="form-check-label" for="admin">
                                      Admin
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    @if (old('role', auth()->user()->role) == 'Operator')
                                        <input class="form-check-input" type="radio" name="role" id="operator" value="Operator" checked>
                                    @else
                                        <input class="form-check-input" type="radio" name="role" id="operator" value="Operator">
                                    @endif
                                    <label class="form-check-label" for="operator">
                                      Operator
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', auth()->user()->alamat) }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary text-center px-5 my-3">Submit</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="tab-pane fade" id="nav-ubahPassword" role="tabpanel" aria-labelledby="nav-ubahPassword-tab" tabindex="0">
                        <form action="{{ route('update-password-operator') }}" method="POST" class="mt-2 p-2">
                            @csrf
                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Password Lama</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">Password Baru</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Konfirmasi Password Baru</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput">
                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection