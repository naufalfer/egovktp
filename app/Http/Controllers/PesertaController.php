<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesertaRequest;
use App\Http\Requests\UpdatePesertaRequest;
use Illuminate\Http\Request;
use App\Models\Peserta;
use DB;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $peserta = Peserta::all();

        // return view('peserta.index', [
        //     'peserta' => $peserta
        // ]); 
        $peserta = DB::table('peserta')
            ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'peserta.id_mahasiswa')
            ->leftJoin('jurusan', 'mahasiswa.jurusan', '=', 'jurusan.id')
            ->get();

        $values = json_decode(json_encode($peserta), true);

        // print_r($values);die;


        return view('peserta.index', [
            'peserta' => $values
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePesertaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesertaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $peserta = DB::table('peserta')
        ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'peserta.id_mahasiswa')
        ->leftJoin('jurusan', 'mahasiswa.jurusan', '=', 'jurusan.id')
        ->where('peserta.id', '=', $id)
        ->get();

        $values = json_decode(json_encode($peserta), true);

        return view('peserta.show', [
            'peserta' => $values
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function shownpm(Request $request)
    {
        $npm = $request->npm;

        if(DB::table('peserta')
        ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'peserta.id_mahasiswa')
        ->leftJoin('jurusan', 'mahasiswa.jurusan', '=', 'jurusan.id')
        ->where('mahasiswa.npm', '=', $npm)
        ->doesntExist()){
            // return view('cekhasilpesertagagal');

           return redirect('/cekpeserta')->with(['error' => 'Peserta tidak ditemukan']);

        } else {
            $peserta = DB::table('peserta')
            ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'peserta.id_mahasiswa')
            ->leftJoin('jurusan', 'mahasiswa.jurusan', '=', 'jurusan.id')
            ->leftJoin('transaksi_pendaftaran', 'peserta.id', '=', 'transaksi_pendaftaran.id_peserta')
            ->where('mahasiswa.npm', '=', $npm)
            ->get();

            $values = json_decode(json_encode($peserta), true);

            return view('cekhasilpeserta', [
                'peserta' => $values
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function pendaftarancovid(Request $request)
    {
        $npm = $request->npm;

        if(DB::table('mahasiswa')
        ->where('mahasiswa.npm', '=', $npm)
        ->doesntExist()){
            // return view('cekhasilpesertagagal');
        //    print_r('tidak ditemukan');die;
           return redirect('/pendaftaran')->with(['error' => 'Mahasiswa dengan NPM tersebut tidak ditemukan']);
        } else {
            $peserta = DB::table('peserta')
            ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'peserta.id_mahasiswa')
            ->leftJoin('jurusan', 'mahasiswa.jurusan', '=', 'jurusan.id')
            ->where('mahasiswa.npm', '=', $npm)
            ->get();

            DB::table('transaksi_pendaftaran')->insert([
                'id_peserta' => $peserta[0]->id,
                'waktupendaftaran' => date('Y-m-d h:i:s'),
            ]);

            // print_r('testbae');die;
           return redirect('/pendaftaran')->with(['success' => 'Berhasil mendaftar pendaftaran tes COVID']);

            // $values = json_decode(json_encode($peserta), true);

            // return view('cekhasilpeserta', [
            //     'success' => 'Post has been updated successfully',
            //     'peserta' => $values
            // ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $peserta = DB::table('peserta')
            ->leftJoin('mahasiswa', 'mahasiswa.id', '=', 'peserta.id_mahasiswa')
            ->leftJoin('jurusan', 'mahasiswa.jurusan', '=', 'jurusan.id')
            ->where('peserta.id', '=', $id)
            ->get();

        $values = json_decode(json_encode($peserta), true);

        return view('peserta.edit', [
            'peserta' => $values
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesertaRequest  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'sometimes|nullable|confirmed'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('users.index')
            ->with('success_message', 'Berhasil mengubah user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}
