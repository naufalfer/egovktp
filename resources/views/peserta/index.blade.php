@extends('adminlte::page')
@section('title', 'Kelola Peserta')
@section('content_header')
    <h1 class="m-0 text-dark">Kelola Peserta</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- <a href="{{route('peserta.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a> -->
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>NPM</th>
                            <th>Nama Peserta</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Hasil Tes</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($peserta as $key => $pesertas)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$pesertas['npm']}}</td>
                                <td>{{$pesertas['nama']}}</td>
                                <td>{{$pesertas['jenis_kelamin']}}</td>
                                <td>{{$pesertas['nama_jurusan']}}</td>
                                <td>{{$pesertas['hasiltes']}}</td>
                                <td>
                                    <a href="{{route('peserta.show', $pesertas['id'])}}" class="btn btn-primary btn-sm">
                                        Detail
                                    </a>
                                    <a href="{{route('peserta.edit', $pesertas['id'])}}" class="btn btn-primary btn-sm">
                                        Edit Hasil Tes
                                    </a>
                                    <!-- <a href="{{route('peserta.destroy', $pesertas['id'])}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a> -->
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush