@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <div class="card border-secondary">
                    <div class="card-header mb-3">Data Nilai </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">NIS</label>
                            <input type="text" name="title" value="{{ $nilai->nis }}" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Kode Mata Pelajaran</label>
                            <input type="text"name="content" class="form-control" readonly value = "{{ $nilai->kode_mata_pelajaran }}"> 
                            </input>
                        </div>
                        <div class="mb-3">
                            <label for="">Nilai</label>
                            <input type="text"name="content" class="form-control" readonly value="{{ $nilai->nilai }}">
                            </input>
                        </div>
                        <div class="mb-3">
                            <label for="">Grade</label>
                            <input type="text"name="content" class="form-control" readonly value="@if($nilai->nilai == 100 || $nilai->nilai >= 90)A
                            @elseif($nilai->nilai == 89 || $nilai->nilai >= 70)B
                            @elseif($nilai->nilai == 69 || $nilai->nilai >= 50)D
                            @elseif($nilai->nilai == 49 || $nilai->nilai >= 0)E
                            @else Erorr    
                            @endif">
                            </input>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('nilai.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection