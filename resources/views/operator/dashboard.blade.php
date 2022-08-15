@extends('operator.layouts.main')

@section('container')
  @foreach ($users as $user)
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-face-grin-wide"></i> Selamat Datang {{ $user->nama }} !</strong><small> Siap mengelola sistem Stikar</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12">
          <h4 class="text-primary">Dashboard</h4>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-4 pb-2">
          <div class="card position-relative" style="width: 100%;">
            <img src="img/imgCard.jpg" class="card-img-top mb-5" alt="...">
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
              <table class="fs-5 w-100">
                <tr>
                  <td>Jabatan</td>
                  <td>:</td>
                  <td>{{ $user->jabatan }}</td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td>{{ $user->jk }}</td>
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
                  <td>Role</td>
                  <td>:</td>
                  <td>{{ $user->role }}</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td>{{ $user->alamat }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
  @endforeach
@endsection