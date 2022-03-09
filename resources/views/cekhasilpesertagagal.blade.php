<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cek Hasil Peserta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron jumbotron-fluid" style="background-color: #D2B48C;">
  <div class="container">
  <div class="row">
    <div class="col-sm-2">
      <!-- <img src="../../images/univwidyatama.png" alt="Logo Univ Widyatama" style="height: 70%; width: 85%;"></img> -->
    </div>
    <div class="col-sm-8">
        <h1 style="text-align: center;">Aplikasi Pendaftaran Tes COVID</h1>      
        <h6 style="text-align: center;">Universitas Widyatama</h6>    
    </div>
    <div class="col-sm-2">
    </div>
  </div>  
    <!-- <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p> -->
  </div>
</div>

<div class="container">
    <h1 style="text-align:center;">Cek Pendaftaran & Hasil Tes COVID 19</h1>
    <form action="/shownpm" method="get">
    @csrf
  <div class="form-group border border-dark" style="padding:20px;">
    <label for="exampleInputEmail1" class="float-left">NPM</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="npm" placeholder="Masukkan NPM Disini">
  </div>
  <button type="submit" class="btn btn-primary float-right">Cek Pendaftaran</button>
</form>
</div>

<div class="container" style="margin-top:100px;">
    <h4 style="text-align:left;">Maaf, NPM yang dimasukkan tidak ditemukan di sistem</h4>
</div>

</body>
</html>

