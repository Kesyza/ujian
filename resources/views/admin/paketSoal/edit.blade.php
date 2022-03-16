@extends('adminlte::page')

@section('title', 'Data Pengguna | Edit')

@section('content_header')

<center><h3>EDIT DATA PENGGUNA</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA PENGGUNA</h5></div>
                    <div class="card-body">
                        <form action="{{route('paketSoal.update',$paketSoal->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Edit Paket Soal</label>
                                <input type="text" name="paket_soal" value="{{$paketSoal->paket_soal}}" class="form-control @error('paket_soal') is-invalid @enderror">
                                @error('paket_soal')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-info">Simpan</button>
                                {{-- <a href="{{url('/admin/pelanggan')}}" class="btn btn-outline-primary">Kembali</a> --}}
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop