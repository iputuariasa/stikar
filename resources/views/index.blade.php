@extends('layouts.main')

@section('container')
    <section style="background-color: #2E0249" id="home">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 text-white d-flex justify-content-center flex-column">
            <h1 id="title" class="fw-bold">SMK TI Bali Global Karangasem</h1>
            <h4 class="slogan">"Kreatif, Inovatif, dan Kompetitif"</h4>
            <a href="" class="btn btn-warning btn-psb">Pendaftaran PSB</a>
            </div>
            <div class="col-lg-6 mt-2 mb-3">
            <img src="/img/imgdashboard2.png" alt="" class="img-fluid">
            </div>
        </div>
        </div>
    </section>

    <section class="py-3 section-motivasi" style="background-color: #fff;">
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
        </div>
    </section>

    <section id="identitas-sekolah" class="py-5">
        <div class="container-fluid">

        </div>
        <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="/img/imgSMKTI1.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="col-lg-8 box-identitas-sekolah">
            <h3>Identitas Sekolah</h3>
            <table>
                <tr>
                <td>Nama Sekolah</td>
                <td>:</td>
                <td>SMK TI Bali Global Karangasem</td>
                </tr>
                <tr>
                <td>Status Sekolah</td>
                <td>:</td>
                <td>Swasta</td>
                </tr>
                <tr>
                <td>NPSN</td>
                <td>:</td>
                <td>69861125</td>
                </tr>
                <tr>
                <td>Akreditasi</td>
                <td>:</td>
                <td>B</td>
                </tr>
                <tr>
                <td>SK Izin Operasional</td>
                <td>:</td>
                <td>420/3147/Disdikpora</td>
                </tr>
                <tr>
                <td>Tanggal Izin Operasional</td>
                <td>:</td>
                <td>21 Juli 2014</td>
                </tr>
                <tr>
                <td>Alamat Sekolah</td>
                <td>:</td>
                <td>Jln. Untung Surapati, No.99X - Amplapura - Bali</td>
                </tr>
                <tr>
                <td>No. Telp</td>
                <td>:</td>
                <td>(0363)21666</td>
                </tr>
                <tr>
                <td>Email</td>
                <td>:</td>
                <td>smktibaliglobalkarangasem@gmail.com</td>
                </tr>
            </table>
            </div>
        </div>
        </div>
    </section>

    <section style="background-color: #2E0249" id="jurusan" class="py-5">
        <div class="container">
        <div class="section-title text-white">
            <h2 class="fw-bold">JURUSAN</h2>
            <p>SMK TI Bali Global Karangasem memiliki 5 jurusan, diantaranya Teknik Komputer dan Jaringan, Rekayasa Perangkat Lunak, Multimedia, Akuntansi, dan Akomodasi Perhotelan. Semua jurusan ini memiliki bidang keahlian yang sering dibutuhkan di dunia kerja.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-2 col-mbl">
                <button type="button" class="btn btn-link rounded-circle" data-bs-toggle="modal" data-bs-target="#tkj">
                    <img src="/img/tkj.png" alt="" class="img-fluid">
                </button>
            </div>
            <div class="col-2 col-mbl">
                <button type="button" class="btn btn-link rounded-circle" data-bs-toggle="modal" data-bs-target="#rpl">
                    <img src="/img/rpl.png" alt="" class="img-fluid">
                </button>
            </div>
            <div class="col-2 col-mbl">
                <button type="button" class="btn btn-link rounded-circle" data-bs-toggle="modal" data-bs-target="#mm">
                    <img src="/img/multimedia.png" alt="" class="img-fluid">
                </button>
            </div>
            <div class="col-2 col-mbl">
                <button type="button" class="btn btn-link rounded-circle" data-bs-toggle="modal" data-bs-target="#ak">
                    <img src="/img/akuntansi.png" alt="" class="img-fluid">
                </button>
            </div>
            <div class="col-2 col-mbl">
                <button type="button" class="btn btn-link rounded-circle" data-bs-toggle="modal" data-bs-target="#ap">
                    <img src="/img/akomodasi-perhotelan.png" alt="" class="img-fluid">
                </button>
            </div>
        </div>
        </div>
    </section>

    <section class="py-5" id="prestasi">
        <div class="container">
            <div class="section-title-white text-white">
            <h2 class="fw-bold" style="color: #001E3C">PRESTASI</h2>
            </div>
            <div class="table-responsive-lg">
            <table class="table">
                <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Penghargaan</th>
                <th scope="col">Keterangan</th>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>1 Juli 2022</td>
                <td>Lomba Desain Web</td>
                <td>Dalam rangka fastival Fas ITB Stikom Bali tingkat SMK/SMA</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>1 Juli 2022</td>
                <td>Lomba Desain Web</td>
                <td>Dalam rangka fastival Fas ITB Stikom Bali tingkat SMK/SMA</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>1 Juli 2022</td>
                <td>Lomba Desain Web</td>
                <td>Dalam rangka fastival Fas ITB Stikom Bali tingkat SMK/SMA</td>
                </tr>
            </table>
            </div>
        </div>
    </section>

    <section style="background-color: #2E0249" id="fasilitas" class="py-5">
        <div class="container">
            <div class="section-title text-white">
            <h2 class="fw-bold">FASILITAS</h2>
            </div>
            <div class="row-fasilitas d-flex">
            <div class="box-scroll">
                <img src="/img/fasilitas1.png" alt="">
                <span>Ruangan AC</span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas2.png" alt="">
                <span>Perpustakaan</span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas3.png" alt="">
                <span></span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas4.png" alt="">
                <span>Ruangan Belajar</span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas5.png" alt="">
                <span>Lap Praktikum</span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas6.png" alt="">
                <span>Media Informasi Digital</span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas7.png" alt="">
                <span>Persembahyangan</span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas8.png" alt="">
                <span>Relasi Bisnis</span>
            </div>
            <div class="box-scroll">
                <img src="/img/fasilitas10.png" alt="">
                <span>Alat Praktikum</span>
            </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="berita">
        <div class="container">
            <div class="section-title-white text-white">
            <h2 class="fw-bold" style="color: #001E3C">BERITA</h2>
            </div>
            <div class="row border border-dark rounded p-3" style="background-color: #fff;">
            <div class="col-md-4 box-img-berita">
                <img src="/img/imgSMKTI2.png" alt="" class="w-100 rounded">
            </div>
            <div class="col-md-8">
                <h3 class="fw-normal">RAPAT AWAL SEMESTER GANJIL TAHUN PELAJARAN 2022/2023 DAN PERSIAPAN HUT KE-77 REPUBLIK INDONESIA</h3>
                <div class="my-2">
                <i class="fa-solid fa-user pe-2"></i><span class="pe-3">Admin Stikar</span> <i class="fa-solid fa-calendar pe-2"></i><small>1 week ago</small>
                </div>
                <div class="btn-berita">
                <a href="" class="btn btn-info mt-4">Selengkapnya</a>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section style="background-color: #2E0249" id="kontak">
        <div class="container py-5">
            <div class="section-title text-white">
            <h2 class="fw-bold">HUBUNGI KAMI</h2>
            <p>Silakan kunjungi segera SMK TI Bali Global Karangasem segera, berikut ini lokasi, kontak, dan media sosial kami</p>
            </div>
            <div class="row">
            <div class="col-md-5">
                <div class="card bg-dark text-white box-maps">
                <iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.5990981490136!2d115.59597011406895!3d-8.440970087613294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd206474e161389%3A0x6efc11abdb832482!2sSMK%20TI%20Bali%20Global%20Karangasem!5e0!3m2!1sen!2sid!4v1656856221774!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-5 text-white col-kontak">
                <h4>Kontak Kami</h4>
                <div class="box-kontak">
                    <li>
                    <i class="bi bi-house-fill"></i>
                    <span>Jln. Untung Surapati, No.99X - Amplapura - Bali</span>
                    </li>
                    <li>
                    <i class="bi bi-telephone-fill"></i>
                    <span>(0363) 21666</span>
                    </li>
                    <li>
                    <i class="bi bi-envelope-fill"></i>
                    <span>smktibaliglobalkarangasem@gmail.com</span>
                    </li>
                </div>
            </div>
            <div class="col-md-2 col-medsos">
                <h4 class="text-white text-center">Sosial Media</h4>
                <div class="d-flex justify-content-evenly box-medsos">
                <a href="https://web.facebook.com/smktibaliglobalkarangasem" class="text-decoration-none text-white fs-2">
                    <i class="fa-brands fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/smktibaliglobalkarangasem/" class="text-decoration-none text-white fs-2">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCHF_EzWG0LtM-p-z_lROFjg/featured" class="text-decoration-none text-white fs-2">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection