@extends('layouts.main')

@section('container')
    <section style="background-color: #2E0249" id="home">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 text-white d-flex justify-content-center flex-column align-items-center pt-5">
                    <h1 id="title" class="fw-bold">PPSB</h1>
                    <h4 class="slogan">"Pendaftaran Penerimaan Siswa Baru"</h4>
                </div>
            </div>
            <div class="row py-4">
                <div class="text-center pb-5 d-flex justify-content-center">
                    <a href="/PPSB/register" class="btn btn-warning me-2" style="width:150px">Register</a>
                    @auth
                    <form action="/logout" method="post">
                        @csrf
                            <button type="submit" class="btn btn-danger me-2" style="width:150px">Logout</button>
                    </form>
                    @else
                        <a href="/login" class="btn btn-success ms-2" style="width:150px">Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </section>
@endsection