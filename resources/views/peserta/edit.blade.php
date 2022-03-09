@extends('adminlte::page')
@section('title', 'Edit Peserta')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Peserta</h1>
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
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="name" value="{{$pesertas['npm']}}" readonly>
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Nama Peserta</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{$pesertas['nama']}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Jenis kelamin</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{$pesertas['jenis_kelamin'] ?? old('email')}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Jurusan</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{$pesertas['nama_jurusan'] ?? old('email')}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Alamat</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{$pesertas['alamat'] ?? old('email')}}" readonly>
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputPassword">Hasil Tes</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password">
                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                    </div> -->
                    <div class="form-group">
                    <label for="exampleInputEmail">Hasil Tes</label>
                    <select class="form-control js-states browser-default select2" name="shopping_id" required id="shopping_id" disabled>
                    @foreach($peserta as $pesertass)
                        <option value="{{ $pesertass['id'] }}">{{ $pesertass['hasiltes']}}</option>
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('peserta.index')}}" class="btn btn-primary float-right" style="margin-left: 10px;">
                        Batal
                    </a>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop