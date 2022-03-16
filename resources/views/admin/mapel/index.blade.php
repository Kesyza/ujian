@extends('adminlte::page')

@section('title', 'Data Pengguna')

@section('content_header')

<center><h3>MANAJEMEN DATA MATA PELAJARAN</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA MATA PELAJARAN
                    {{-- <a href="{{route('mapel.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Mata Pelajaran"><i class="fas fa-plus"></i></a> --}}
                    </h5>                
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="mapel">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($mapel as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_mapel}}</td>
                                    <td>
                                        <form action="{{route('mapel.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('mapel.edit',$data->id)}}" class="btn btn-outline-info" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus"><i class="fas fa-window-close">
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
            $('#mapel').DataTable();
        });
    </script>

@endsection