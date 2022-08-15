@extends('operator.layouts.main')

@section('container')
    <div class="row pt-3">
        <div class="col-12">
          <h4 class="text-primary">User</h4>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-4 pb-2">
          <div class="card position-relative" style="width: 100%;">
            <img src="/img/imgCard.jpg" class="card-img-top mb-5" alt="...">
            <div class="card-body text-center mb-4">
              <span class="d-block fs-5 fw-semibold">{{ $user->nama }}</span>
              <span class="fs-6 fw-semibold">{{ $user->email }}</span>
            </div>
            <div class="image-circle position-absolute top-50 start-50 translate-middle img-fluid box-imgProfil">
              <img src="{{ asset('storage/'.$user->foto) }}" alt="" class="bg-primary rounded-circle img-fluid w-100">
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card bg-primary text-white border-0">
            <div class="card-body box-detailSekolah">
              @if ($user->role == 'Siswa')
                <table class="fs-5 w-100">
                  <tr>
                    <td>Role</td>
                    <td>:</td>
                    <td>{{ $user->role }}</td>
                  </tr>
                  <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td>{{ $newStudent->asal_sekolah }}</td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td>{{ $newStudent->telepon }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $newStudent->jk }}</td>
                  </tr>
                  <tr>
                      <td>Nama Ayah</td>
                      <td>:</td>
                      <td>{{ $newStudent->nama_ayah }}</td>
                  </tr>
                  <tr>
                      <td>Nama Ibu</td>
                      <td>:</td>
                      <td>{{ $newStudent->nama_ibu }}</td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{ $newStudent->agama }}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $newStudent->tgl_lahir }}</td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>{{ $newStudent->tempat_lahir }}</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $newStudent->alamat }}</td>
                  </tr>
                </table>
                @else
                <table class="fs-5 w-100">
                  <tr>
                    <td>Role</td>
                    <td>:</td>
                    <td>{{ $user->role }}</td>
                  </tr>
                  <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>{{ $user->jabatan }}</td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td>{{ $user->telepon }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $user->jk }}</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $user->alamat }}</td>
                  </tr>
                </table>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex flex-row text-end">
        <div>
          <a href="/users" class="btn btn-success"><i class="fa-solid fa-arrow-left-long"></i> Kembali</a>
          
          <a href="/users/{{ $user->slug }}/edit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square align-text-bottom"></i> Ubah Data</a>
          
          <form action="/users/{{ $user->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa-solid fa-trash-can align-text-bottom"></i> Hapus Data</button>
          </form>

        </div>
      </div>
@endsection