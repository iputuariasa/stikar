@extends('admin.layouts.main')

@section('container')
    <div class="row pt-3">
        <div class="col-12">
        <h4 class="text-primary">Motivasi</h4>
        </div>
    </div>
    <section class="py-3 mb-3" style="background-color: #fff;">
        <div class="container col-lg-6">
            <div class="d-flex justify-content-center">
                <img src="/img/line.png" alt="" width="50%" class="center">
            </div>
            <div class="d-block w-100 text-inovasi">
                <h6 class="text-center"><span>"</span>{{ $motivation->isi }}<span>"</span></h6>
                <h5 class="text-end pembicara-inovasi"> - {{ $motivation->pencetus }}</h5>
            </div>
        </div>
    </section>
    <div class="row d-flex flex-row text-end">
        <div>
          <a href="/dashboardAdmin/motivations" class="btn btn-success"><i class="fa-solid fa-arrow-left-long"></i> Kembali</a>
          
          <a href="/dashboardAdmin/motivations/{{ $motivation->id }}/edit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square align-text-bottom"></i> Ubah Motivasi</a>
          
          <form action="/dashboardAdmin/motivations/{{ $motivation->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa-solid fa-trash-can align-text-bottom"></i> Hapus Motivasi</button>
          </form>

        </div>
    </div>
@endsection