@extends('adminlte::page')

@section('title', 'Data Paket Soal')

@section('content_header')

<center><h3>MANAJEMEN DATA PAKET SOAL</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA PAKET SOAL
                    <a href="{{route('paketSoal.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Paket Soal"><i class="fas fa-plus"></i></a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="paketSoal">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Paket Soal</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                                @foreach ($paketSoal as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->paket_soal}}</td>
                                    <td>
                                        <form action="{{route('paketSoal.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('paketSoal.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus"><i class="fas fa-window-close"></i></button>
                                            {{-- <button type="submit" class="btn btn-danger delete-confirm"><i class="fas fa-window-close"></i></button><br> --}}
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('dataTables/datatables.min.css') }}">

@endsection

@section('js')

    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    <script src="{{ asset('dataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#paketSoal').DataTable();
        });
    </script>

@endsection