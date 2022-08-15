@extends('admin.layouts.main')

@section('container')
    <div class="row pt-3">
        <div class="col-12">
        <h4 class="text-primary">Ubah Motivasi</h4>
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-8 bg-white p-3 rounded">
            <form action="/dashboardAdmin/motivations/{{ $motivation->id }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="pencetus" class="form-label">Pencetus</label>
                    <input type="text" class="form-control @error('pencetus') is-invalid @enderror" id="pencetus" name="pencetus" value="{{ old('pencetus', $motivation->pencetus) }}">
                    @error('pencetus')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control @error('isi') is-invalid @enderror" placeholder="Leave a comment here" id="isi" style="height: 100px" name="isi">{{ old('isi', $motivation->isi) }}</textarea>
                        <label for="isi">Kalimat Motivasi</label>
                    </div>
                    @error('isi')
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