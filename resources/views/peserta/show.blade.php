@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Detail Peserta</h1>
@stop
@section('content')
        @method('PUT')
        @csrf
        @foreach($peserta as $key => $pesertas)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">NPM</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="NPM" name="npm" value="{{$pesertas['npm']}}" readonly>
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Nama Peserta</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Nama Peserta" name="namapeserta" value="{{$pesertas['nama']}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Jenis kelamin</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Jenis Kelamin" name="jeniskelamin" value="{{$pesertas['jenis_kelamin']}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Jurusan</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Jurusan" name="jurusan" value="{{$pesertas['nama_jurusan']}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Alamat</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Alamat" name="alamat" value="{{$pesertas['alamat']}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Hasil Tes</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Hasil Tes" name="hasiltes" value="{{$pesertas['hasiltes']}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('peserta.index')}}" class="btn btn-primary float-right">
                        Kembali
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop