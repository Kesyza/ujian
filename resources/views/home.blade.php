@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<center><h1>SELAMAT DATANG DI HALAMAN ADMIN</h1></center>

@stop

@section('content')

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="fa fa-book-open text-white fa-2x"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>PENGGUNA</h4>
          </div>
          <div class="card-body">
            {{ App\Models\Pengguna::count() ?? '0' }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="fa fa-bell text-white fa-2x"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>MAPEL</h4>
          </div>
          <div class="card-body">
            {{ App\Models\Mapel::count() ?? '0' }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="fa fa-tags text-white fa-2x"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>PAKET SOAL</h4>
          </div>
          <div class="card-body">
            {{ App\Models\PaketSoal::count() ?? '0' }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fa fa-users text-white fa-2x"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>SOAL</h4>
          </div>
          <div class="card-body">
            {{ App\Models\Soal::count() ?? '0' }}
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