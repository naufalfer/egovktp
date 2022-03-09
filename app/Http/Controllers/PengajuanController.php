<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Ktp;
use App\Login;
use App\Penduduk;
use App\Sistem;
use DB;
use View;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    //
    public function submitpengajuan(Request $request)
    {
        $sistem = new Sistem;
        $sistem->nama = strtoupper($request->nama);
        $sistem->nik = strtoupper($request->nomorktp);
        $sistem->tujuankerja = strtoupper($request->jenis_pengajuan);
        $sistem->jamkerja = date("Y-m-d h:i:sa");
        $sistem->alamat = strtoupper($request->alamat);
        $sistem->no_kk = strtoupper($request->nomorkk);
        $sistem->jenis_kelamin = strtoupper($request->jk);
        $sistem->status = '0';

        if ($sistem->save()){
            print_r('Input data sukses');die;
        } else {
            print_r('Input data gagal');die;
        }

    }

    public function showpengajuan()
    {
        $sistem = DB::table('sistem')
        ->get();

        $values = json_decode(json_encode($sistem), true);

        // print_r($values);die;


        return view('listadmin', [
            'sistem' => $values
        ]);
    }

    public function showpengajuanpeserta()
    {
        $sistem = DB::table('sistem')
        ->get();

        $values = json_decode(json_encode($sistem), true);

        // print_r($values);die;


        return view('listpeserta', [
            'sistem' => $values
        ]);
    }

    public function show()
    {
        $nik = $request->nik;
        //
        $sistem = DB::table('sistem')
        ->where('sistem.nik', '=', $nik)
        ->get();

        $values = json_decode(json_encode($sistem), true);

        return view('pengajuanadmin', [
            'sistem' => $values
        ]);
    }
}
