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
                        <form action="{{route('pengguna.update',$pengguna->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Edit Nama</label>
                                        <input type="text" name="nama" value="{{$pengguna->nama}}" class="form-control @error('nama') is-invalid @enderror">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert"></span>
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Edit Email</label>
                                        <input type="text" name="email" value="{{$pengguna->email}}" class="form-control @error('email') is-invalid @enderror">
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
                                        <label for="">Edit Password</label>
                                        <input type="password" name="password" value="{{$pengguna->password}}" class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert"></span>
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Edit Asal Sekolah</label>
                                        <input type="text" name="nama_sekolah" value="{{$pengguna->nama_sekolah}}" class="form-control @error('nama_sekolah') is-invalid @enderror">
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