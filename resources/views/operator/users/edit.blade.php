@extends('operator.layouts.main')

@section('container')
    <div class="row pt-3">
        <div class="col-12 border-bottom">
            <h4 class="text-primary">Ubah Data User</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3 rounded">
        <div class="col-md-9 bg-white p-3">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab">Ubah Biodata</button>

                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab">Ubah Password</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                  @if ($user->role == 'Siswa')
                    <form action="/new_students/{{ $newStudent->slug }}" method="post" class="p-2 mt-2 row g-3">
                      @method('put')
                      @csrf

                      <div class="col-md-6 form-floating">
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputNama" placeholder="nama" name="nama" value="{{ old('nama', $newStudent->nama) }}" required autofocus>
                          <label for="inputNama">Nama</label>
                          @error('nama')
                          <div class="invalid-feedback text-start">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="col-md-6 form-floating">
                          <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="inputTelepon" placeholder="telepon" name="telepon" value="{{ old('telepon', $newStudent->telepon) }}" required>
                          <label for="inputTelepon">Telepon</label>
                          @error('telepon')
                          <div class="invalid-feedback text-start">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="col-12 form-floating">
                          <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="inputAsalSekolah" placeholder="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah', $newStudent->asal_sekolah) }}" required>
                          <label for="inputAsalSekolah">Asal Sekolah</label>
                          @error('asal_sekolah')
                          <div class="invalid-feedback text-start">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="col-md-6 form-floating">
                          <input name="nama_ayah" type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="inputNamaAyah" placeholder="nama_ayah" value="{{ old('nama_ayah', $newStudent->nama_ayah) }}">
                          <label for="inputNamaAyah">Nama Ayah</label>
                          @error('nama_ayah')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-md-6 form-floating">
                          <input name="nama_ibu" type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="inputNamaIbu" placeholder="nama_ibu" value="{{ old('nama_ibu', $newStudent->nama_ibu) }}">
                          <label for="inputNamaIbu">Nama Ibu</label>
                          @error('nama_ibu')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="">
                          <label for="jk" class="form-label">Jenis Kelamin</label>
                          <div class="form-check">
                              @if (old('jk', $newStudent->jk) == 'Laki-laki')
                                  <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki" checked>
                              @else
                                  <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki">
                              @endif
                              <label class="form-check-label" for="laki-laki">
                              Laki-laki
                              </label>
                          </div>
                          <div class="form-check">
                              @if (old('jk', $newStudent->jk) == 'Perempuan')
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
                              @if (old('agama', $newStudent->agama) == 'Hindu')
                                  <option value="Hindu" selected>Hindu</option>
                              @elseif (old('agama', $newStudent->agama) == 'Islam')
                                  <option value="Islam" selected>Islam</option>
                              @elseif (old('agama', $newStudent->agama) == 'Kristen Protestan')
                                  <option value="Kristen Protestan" selected>Kristen Protestan</option>
                              @elseif (old('agama', $newStudent->agama) == 'Katolik')
                                  <option value="Katolik" selected>Katolik</option>
                              @elseif (old('agama', $newStudent->agama) == 'Buddha')
                                  <option value="Buddha" selected>Buddha</option>
                              @elseif (old('agama', $newStudent->agama) == 'Konghucu')
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
                          <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir', $newStudent->tgl_lahir) }}">
                          @error('tgl_lahir')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-md-6">
                          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                          <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir', $newStudent->tempat_lahir) }}">
                          @error('tempat_lahir')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-12 form-floating">
                          <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" placeholder="alamat" value="{{ old('alamat', $newStudent->alamat) }}">
                          <label for="inputAlamat">Alamat</label>
                          @error('alamat')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center px-5 my-3">Submit</button>
                      </div>
                    </form>
                  @else
                    <form action="/users/{{ $user->slug }}" method="post" class="p-2 mt-2" enctype="multipart/form-data">
                        @method('put')
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
                            @if ($user->foto)
                                <img src="{{ asset('storage/'.$user->foto) }}" alt="" class="bg-primary rounded-circle img-fluid w-100 img-preview">
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
                        <input type="hidden" name="oldFoto" value="{{ $user->foto }}">
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $user->nama) }}">
                          @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control disabled @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" disabled>
                          @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                              <div class="form-check">
                                @if (old('jk', $user->jk ) == 'Laki-laki')
                                    <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="Laki-laki">
                                @endif
                                <label class="form-check-label" for="laki-laki">
                                  Laki-laki
                                </label>
                              </div>
                              <div class="form-check">
                                @if (old('jk', $user->jk) == 'Perempuan')
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
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ old('telepon', $user->telepon) }}">
                            @error('telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan', $user->jabatan) }}">
                            @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                              <div class="form-check">
                                @if (old('role', $user->role ) == 'Admin')
                                    <input class="form-check-input" type="radio" name="role" id="admin" value="Admin" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="role" id="admin" value="Admin">
                                @endif
                                <label class="form-check-label" for="admin">
                                  Admin
                                </label>
                              </div>
                              <div class="form-check">
                                @if (old('role', $user->role) == 'Operator')
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
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat', $user->alamat) }}">
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
                  @endif
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                  <form action="/users/{{ $user->slug }}" method="post" class="p-2 mt-2">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="Newpassword" class="form-label">Password Baru</label>
                        <input type="password" class="form-control @error('newpassword') is-invalid @enderror" id="Newpassword" name="newpassword">
                        @error('newpassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Confimpassword" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control @error('corfimpassword') is-invalid @enderror" id="Confimpassword" name="corfimpassword">
                        @error('corfimpassword')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                      @if (session()->has('errorPassword'))
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ session('errorPassword') }}
                        </div>
                      @endif
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-center px-5 my-3">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection