<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/cekpeserta', function () {
    return view('peserta.cekpeserta');
});

Route::get('/cekhasilpeserta', function () {
    return view('cekhasilpeserta');
});

Route::get('/cekhasilpesertagagal', function () {
    return view('cekhasilpesertagagal');
});

Route::get('/pendaftaran', function () {
    return view('peserta.pendaftaran');
});

Route::get('/pengajuanpeserta', function () {
    return view('pengajuanpeserta');
});

Route::get('/pengajuanadmin', function () {
    return view('pengajuanadmin');
});

Route::get('/listadmin', function () {
    return view('listadmin');
});

Route::get('/listpeserta', function () {
    return view('listpeserta');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shownpm', [App\Http\Controllers\PesertaController::class, 'shownpm'])->name('shownpm');

Route::get('/pendaftarancovid', [App\Http\Controllers\PesertaController::class, 'pendaftarancovid'])->name('pendaftarancovid');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('users', \App\Http\Controllers\UserController::class)
->middleware('auth');

Route::resource('peserta', \App\Http\Controllers\PesertaController::class)
->middleware('auth');

Route::resource('jurusan', \App\Http\Controllers\JurusanController::class)
->middleware('auth');

Route::get('/submitpengajuan', [App\Http\Controllers\PengajuanController::class, 'submitpengajuan'])->name('submitpengajuan');
Route::get('/showpengajuan', [App\Http\Controllers\PengajuanController::class, 'showpengajuan'])->name('showpengajuan');
Route::get('/showpengajuanpeserta', [App\Http\Controllers\PengajuanController::class, 'showpengajuanpeserta'])->name('showpengajuanpeserta');