@extends('operator.layouts.main')

@section('container')
    <div class="row pt-3">
        <div class="col-12 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
            <h4 class="text-primary">Users</h4>
            <a href="/users/create" class="btn btn-primary">Tambah User</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if (session()->has('success'))
                <div class="alert alert-success mt-2" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row mb-2 d-flex justify-content-center">
        <div class="col-md-8">
            <form class="d-flex" role="search" action="/users" method="">
                <input class="form-control me-2" type="search" placeholder="Cari Users..." aria-label="Search" name="searchUsers" value="{{ request('searchUsers') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    @if ($users->count())
        <div class="table-responsive">
            <table class="table table-hover">
                <tr class="table-info">
                    <td>No</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Aksi</td>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="/users/{{ $user->slug }}" class="badge bg-info"><i class="fa-solid fa-eye align-text-bottom"></i></a>

                            <a href="/users/{{ $user->slug }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square align-text-bottom"></i></a>
                            
                            <form action="/users/{{ $user->slug }}" method="post" class="d-inline">
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
            {{ $users->links() }}
        </div>
    @else
        <h3 class="text-center">No Post Found.</h3>
    @endif
@endsection