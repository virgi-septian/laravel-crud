@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Jurusan </div>

                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="">Kode Mata Pelajaran</label>
                                <input type="text" name="kode_mata_pelajaran" value="{{ $jurusan->kode_mata_pelajaran }}"
                                    class="form-control @error('kode_mata_pelajaran') is-invalid @enderror">
                                @error('kode_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Mata Pelajaran</label>
                                <input type="text" name="nama_mata_pelajaran" value="{{ $jurusan->nama_mata_pelajaran }}" class="form-control @error('nama_mata_pelajaran') is-invalid @enderror">
                                </input>
                                @error('nama_mata_pelajaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Semester</label>
                                <select type="text"name="semester" value="{{ $jurusan->semester }}" class="form-select @error('semester') is-invalid @enderror">
                                    <option value="Ganjil" <?=($jurusan->jurusan == "Ganjil")? "selected":null?> >Ganjil</option>
                                    <option value="Genap" <?=($jurusan->jurusan == "Genap")? "selected":null?> >Genap</option>
                                </select>
                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Jurusan</label>
                                <select type="text" name="jurusan" class="form-select @error('jurusan') is-invalid @enderror">
                                    <option value="RPL" <?=($jurusan->jurusan == "RPL")? "selected":null?> >RPL</option>
                                    <option value="TBSM" <?=($jurusan->jurusan == "TBSM")? "selected":null?> >TPSM</option>
                                    <option value="TKRO" <?=($jurusan->jurusan == "TKRO")? "selected":null?> >TKRO</option>
                                </select>
                                @error('jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection