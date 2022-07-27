@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary bg-gray text-light">
                    <div class="card-header mb-3 border-bottom border-1">Data Jurusan</div>

                    <div class="card-body">
                        <form action="{{ route('jurusan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="kmp">Kode Mata Pelajaran</label>
                                <input type="tetx" name="kode_mata_pelajaran" id="kmp" placeholder="Masukkan Kode Mata Pelajaran"
                                    class="form-control @error('kode_mata_pelajaran') is-invalid @enderror">
                                @error('kode_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nmp">Nama Mata Pelajaran</label>
                                <input type="text" name="nama_mata_pelajaran" id="nmp" placeholder="Masukkan Nama Mata Pelajaran"
                                    class="form-control @error('nama_mata_pelajaran') is-invalid @enderror">
                                @error('nama_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="text" name="semester" id="semester" placeholder="Masukkan Semester"
                                    class="form-control @error('semester') is-invalid @enderror">
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jurusan">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control form-select @error('jurusan') is-invalid @enderror">
                                    <option value="0" hidden selected>--- Pilih Jurusan ---</option>
                                    <option value="RPL">RPL</option>
                                    <option value="TBSM">TBSM</option>
                                    <option value="TKRO">TKRO</option>
                                </select>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <center>
                                <div class="btn-group mt-4 pt-5" role="group" aria-label="Basic mixed styles example">
                                    <button type="submit" name="save" class="btn btn-primary">Simpan </button>
                                    <a href="{{ route('jurusan.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection