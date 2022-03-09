@extends('adminlte::page')
@section('title', 'Arsip Saya')
@section('content_header')
    <h1 class="m-0 text-dark">Arsip Saya</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIK</th>
                            <th>No KK</th>
                            <th>Nama Peserta</th>
                            <th>Jenis Pengajuan</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sistem as $key => $sistems)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$sistems['nik']}}</td>
                                <td>{{$sistems['no_kk']}}</td>
                                <td>{{$sistems['nama']}}</td>
                                <td>{{$sistems['tujuankerja']}}</td>
                                <td>{{$sistems['status']}}</td>
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