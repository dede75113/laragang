@extends('layouts/main')

@section('judul', 'Form Ubah Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
                    <form method="post" action="/students/{{ $student->id }}">
                        @method('patch')
                        @csrf
                            <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama" value="{{ $student->nama }}">
                                <div class="invalid-feedback">
                                     @error('nama')
                                     {{ $message }}
                                     @enderror
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp" value="{{ $student->nrp }}">
                            <div class="invalid-feedback">
                                    @error('nrp')
                                    {{ $message }}
                                    @enderror
                               </div>
                            </div>
                            <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{ $student->email }}">
                                    <div class="invalid-feedback">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                       </div>
                            </div>
                            <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror"  id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ $student->jurusan }}">
                                    <div class="invalid-feedback">
                                            @error('jurusan')
                                            {{ $message }}
                                            @enderror
                                       </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah Data!</button>
                    </form>

            </div>
        </div>
    </div>
@endsection
