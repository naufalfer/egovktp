@extends('adminlte::page')

@section('title', 'Document Access Data Systems')

@section('content_header')

<style>
    .card {
        background: #FFD466;
        border-radius: 20px;
        width: 651px;
        height: 174px;
    }

    .card-text {
        margin-top: 30px;
    }

    .img-wfh {
        position: absolute;
        width: 238px;
        height: 154px;
        left: 400px;
        top: 20px;
    }

    .menu1 {
        position: absolute;
        width: 272px;
        height: 237px;
        left: 300px;
        top: 332px;

        background: #B1EE94;
        border-radius: 47px;
    }

    .menu1-title {
        margin-top: 180px;
        margin-left: 50px;
    }

    .menu1-body > h5 {
        margin-top: 180px;
        margin-left: 50px;
    }

    .img-menu1 {
        position: absolute;
        width: 145px;
        height: 112px;
        top: 40px;
        left: 50px;
    }

    .menu2 {
        position: absolute;
        width: 272px;
        height: 237px;
        left: 625px;
        top: 332px;

        background: #447AE1;
        border-radius: 47px;
    }

    .menu2-title {
        margin-top: 180px;
        margin-left: 70px;
        color: white;
    }

    .menu2-body > h5 {
        margin-top: 180px;
        margin-left: 70px;
    }

    .img-menu2 {
        position: absolute;
        width: 145px;
        height: 112px;
        top: 40px;
        left: 50px;
    }

    .menu3 {
        position: absolute;
        width: 272px;
        height: 237px;
        left: 950px;
        top: 332px;

        background: #F7F174;
        border-radius: 47px;
    }

    .menu3-body > h5 {
        margin-top: 180px;
        margin-left: 120px;
    }

    .img-menu3 {
        position: absolute;
        width: 145px;
        height: 112px;
        top: 40px;
        left: 70px;
    }
</style>

@stop

@section('content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Selamat Datang!</h5>
    <p class="card-text">Silahkan Anda akses dokumen Kependudukan Anda </p>
  </div>
  <img src="../../images/wfh_1.png" alt="Logo Univ Widyatama" class="img-wfh">
</div>

<div class="menu1">
    <img src="../../images/drawkit.png" alt="Logo Menu Pengajuan Dokumen" class="img-menu1">
  <div class="menu1-body">
    <a href="/pengajuanpeserta"><h5 class="menu1-title">Pengajuan Dokumen</h5></a>
  </div>
</div>

<div class="menu2">
    <img src="../../images/drawkit2.png" alt="Logo Menu Lihat Arsip Saya" class="img-menu2">
  <div class="menu2-body">
  <a href="/showpengajuanpeserta">
    <h5 class="menu2-title">
        Lihat Arsip Saya
    </h5>
    </a>
  </div>
</div>

<div class="menu3">
    <img src="../../images/stuck.png" alt="Logo Menu FAQ" class="img-menu3">
  <div class="menu3-body">
    <h5 class="menu3-title">FAQ</h5>
  </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop