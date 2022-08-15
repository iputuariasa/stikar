@extends('general.layouts.main')

@if (auth()->user()->role == 'Siswa')
@section('container')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary py-2 text-center">Biodata Saya</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 bg-white rounded p-3 mb-5">
                    <form action="/biodata" method="post" class="p-2 mt-2 row g-3">
                        @csrf
                        <input type="hidden" name="id" value="{{ auth()->user()->newStudent->id }}">
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputNama" placeholder="nama" name="nama" value="{{ old('nama', auth()->user()->newStudent->nama) }}" required autofocus>
                            <label for="inputNama">Nama</label>
                            @error('nama')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="inputTelepon" placeholder="telepon" name="telepon" value="{{ old('telepon', auth()->user()->newStudent->telepon) }}" required>
                            <label for="inputTelepon">Telepon</label>
                            @error('telepon')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 form-floating">
                            <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="inputAsalSekolah" placeholder="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah', auth()->user()->newStudent->asal_sekolah) }}" required>
                            <label for="inputAsalSekolah">Asal Sekolah</label>
                            @error('asal_sekolah')
                            <div class="invalid-feedback text-start">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-floating">
                            <input name="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="inputNamaAyah" placeholder="nama_ayah" value="{{ old('nama_ayah', auth()->user()->newStudent->nama_ayah) }}">
                            <label for="inputNamaAyah">Nama Ayah</label>
                            @error('nama_ayah')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 form-floating">
                            <input name="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="inputNamaIbu" placeholder="nama_ibu" value="{{ old('nama_ibu', auth()->user()->newStudent->nama_ibu) }}">
                            <label for="inputNamaIbu">Nama Ibu</label>
                            @error('nama_ibu')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <div class="form-check">
                                @if (old('jk', auth()->user()->newStudent->jk) == 'Laki-laki')
                                    <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki">
                                @endif
                                <label class="form-check-label" for="laki-laki">
                                Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                @if (old('jk', auth()->user()->newStudent->jk) == 'Perempuan')
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
                        <div class="">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" name="agama" id="agama">
                                @if (old('agama', auth()->user()->newStudent->agama) == 'Hindu')
                                    <option value="Hindu" selected>Hindu</option>
                                @elseif (old('agama', auth()->user()->newStudent->agama) == 'Islam')
                                    <option value="Islam" selected>Islam</option>
                                @elseif (old('agama', auth()->user()->newStudent->agama) == 'Kristen Protestan')
                                    <option value="Kristen Protestan" selected>Kristen Protestan</option>
                                @elseif (old('agama', auth()->user()->newStudent->agama) == 'Katolik')
                                    <option value="Katolik" selected>Katolik</option>
                                @elseif (old('agama', auth()->user()->newStudent->agama) == 'Buddha')
                                    <option value="Buddha" selected>Buddha</option>
                                @elseif (old('agama', auth()->user()->newStudent->agama) == 'Konghucu')
                                    <option value="Konghucu" selected>Konghucu</option>
                                @else
                                    <option value="Hindu">Hindu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir', auth()->user()->newStudent->tgl_lahir) }}">
                            @error('tgl_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir', auth()->user()->newStudent->tempat_lahir) }}">
                            @error('tempat_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 form-floating">
                            <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="alamat" value="{{ old('alamat', auth()->user()->newStudent->alamat) }}">
                            <label for="inputAlamat">Alamat</label>
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center px-5 my-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@else
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
                        <form action="/biodata" method="post" class="p-2" enctype="multipart/form-data">
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
                        <form action="/updatePassword" method="POST" class="mt-2 p-2">
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
@endif