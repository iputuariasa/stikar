@extends('operator.layouts.main')

@section('container')
    <div class="row pt-3">
        <div class="col-12 border-bottom">
            <h4 class="text-primary">Tambah User Baru</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-9 bg-white p-3 rounded">
            <form action="/dashboardOperator/users" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 text-center d-flex justify-content-center">
                    <div class="image-circle img-fluid box-imgProfil d-flex justify-content-center">
                        <img class="bg-primary rounded-circle img-fluid w-100 img-preview">
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
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                  @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <input type="hidden" name="slug" id="slug">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                      <div class="form-check">
                        @if (old('jk') == 'Laki-laki')
                            <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki" checked>
                        @else
                            <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki">
                        @endif
                        <label class="form-check-label" for="laki-laki">
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        @if (old('jk') == 'Perempuan')
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
                    <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon') }}">
                    @error('telepon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
                    @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" name="role" id="role">
                        @if (old('role') == 'Admin')
                            <option value="Admin" selected>Admin</option>
                        @elseif (old('role') == 'Operator')
                            <option value="Operator" selected>Operator</option>
                        @else
                            <option value="Admin">Admin</option>
                            <option value="Operator">Operator</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
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
    </div>
@endsection