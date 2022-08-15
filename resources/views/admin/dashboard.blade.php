@extends('admin.layouts.main')

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
        <div class="row pt-3">
            <div class="col-12">
              <h4 class="text-primary">Motivasi</h4>
            </div>
        </div>
        <section class="py-3 mb-4 section-motivasi" style="background-color: #fff;">
            <div class="container col-lg-6">
                <div class="d-flex justify-content-center">
                    <img src="/img/line.png" alt="" width="50%" class="center">
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-block w-100 text-inovasi">
                                <h6 class="text-center"><span>"</span>{{ $motivations[0]->isi }}<span>"</span></h6>
                                <h5 class="text-end pembicara-inovasi"> - {{ $motivations[0]->pencetus }}</h5>
                            </div>
                        </div>
                        @foreach ($motivations->skip(1) as $motivation)
                            <div class="carousel-item ">
                                <div class="d-block w-100 text-inovasi">
                                    <h6 class="text-center"><span>"</span>{{ $motivation->isi }}<span>"</span></h6>
                                    <h5 class="text-end pembicara-inovasi"> - {{ $motivation->pencetus }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                  <a href="/dashboardAdmin/motivations" class="btn btn-warning text-white">Kelola Motivasi</a>
                </div>
            </div>
        </section>
    @endforeach
@endsection