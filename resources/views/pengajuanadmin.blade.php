@extends('adminlte::page')

@section('title', 'Document Access Data Systems')

@section('content_header')

<style>
</style>

@stop

@section('content')
@foreach($sistem as $key => $sistems)
<div class="container mt-5">
        <h2>Form Pengajuan Berkas Admin</h2>
        <form action="/action_page.php">
            <div class="card bg-light text-dark">
            <div class="card-body">
          <div class="mb-3 mt-3">
            <label for="kk">Nomor KK </label>
            <input type="text" class="form-control" id="kk" placeholder="Nomor KK " name="nomorkk" value="{{$sistems['no_kk']}}" readonly>
          </div>
          <div class="mb-3">
            <label for="pwd">Nomor NIK </label>
            <input type="text" class="form-control" id="ktp" placeholder="Nomor NIK" name="nomorktp" value="{{$sistems['nik']}}" readonly>
          </div>
          <div class="mb-3">
            <label for="pwd">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="{{$sistems['nama']}}" readonly>
          </div>
          <div class="mb-3">
            <label for="pwd">Jenis Kelamin</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="{{$sistems['jenis_kelamin']}}" readonly>
          </div>
          <div class="mb-3">
            <label for="pwd">Jenis Kelamin</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="{{$sistems['jenis_kelamin']}}" readonly>
          </div>
          <div class="mb-3">
            <label for="pwd">Jenis Pengajuan</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="{{$sistems['tujuankerja']}}" readonly>
          </div>
          <button type="button" class="btn btn-primary">Approve</button>
          <button type="button" class="btn btn-primary">Reject</button>
        </form>
      </div>
      @endforeach

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop