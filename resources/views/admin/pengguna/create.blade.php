@extends('adminlte::page')

@section('title', 'Data Pengguna | Tambah')

@section('content_header')

<center><h3>TAMBAH DATA PENGGUNA</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA PENGGUNA</h5></div>
                <div class="card-body">
                    <form action="{{route('pengguna.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Nama</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Email</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Masukan Asal Sekolah</label>
                                    <input type="text" name="nama_sekolah" class="form-control @error('nama_sekolah') is-invalid @enderror">
                                    @error('nama_sekolah')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-info">Simpan</button>
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