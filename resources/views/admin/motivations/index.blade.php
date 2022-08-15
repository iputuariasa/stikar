@extends('admin.layouts.main')

@section('container')
    <div class="row pt-3">
        <div class="col-12">
        <h4 class="text-primary">Motivasi</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-center mb-3">
        <div class="col-md-12 d-flex justify-content-between">
            <form class="d-flex" role="search" action="/dashboardAdmin/motivations" method="">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchMotivations" value="{{ request('searchMotivations') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a href="/dashboardAdmin/motivations/create" class="btn btn-primary">Tambah Motivasi</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    @if ($motivations->count())
        <div class="table-responsive">
            <table class="table table-hover">
                <tr class="table-info">
                    <td>No</td>
                    <td>Pencetus</td>
                    <td>Motivasi</td>
                    <td>Aksi</td>
                </tr>
                @foreach ($motivations as $motivation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $motivation->pencetus }}</td>
                        <td>{{ Str::limit(strip_tags($motivation->isi), 70) }}</td>
                        <td>
                            <a href="/dashboardAdmin/motivations/{{ $motivation->id }}" class="badge bg-info"><i class="fa-solid fa-eye align-text-bottom"></i></a>

                            <a href="/dashboardAdmin/motivations/{{ $motivation->id }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square align-text-bottom"></i></a>
                            
                            <form action="/dashboardAdmin/motivations/{{ $motivation->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Yakin Ingin Menghapus ?')"><i class="fa-solid fa-trash-can align-text-bottom"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $motivations->links() }}
        </div>
    @else
        <h3 class="text-center">No Post Found.</h3>
    @endif
@endsection