@extends('adminlte::page')

@section('title', 'Document Access Data Systems')

@section('content_header')

<style>
</style>

@stop

@section('content')
<div class="container mt-5">
        <h2>Form Pengajuan Berkas Peserta</h2>
        <form action="/submitpengajuan">
            <div class="card bg-light text-dark">
            <div class="card-body">
          <div class="mb-3 mt-3">
            <label for="kk">Nomor KK </label>
            <input type="text" class="form-control" id="kk" placeholder="Nomor KK " name="nomorkk">
          </div>
          <div class="mb-3">
            <label for="pwd">Nomor NIK </label>
            <input type="text" class="form-control" id="ktp" placeholder="Nomor NIK" name="nomorktp">
          </div>
          <div class="mb-3">
            <label for="pwd">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
          </div>
          <div class="mb-3">
            <label for="comment">Alamat Lengkap</label>  
                <textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                <div class="mb-3">
                <label for="jenis_kelamin" class="form-label"> Jenis Kelamin</label>
                <select class="form-select" name="jk">
                  <option>L</option>
                  <option>P</option>
                </select>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Pengajuan</label>
                    <select class="form-select" name="jenis_pengajuan">
                      <option> e-KTP </option>
                      <option>Kartu Keluarga</option>
                    </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop