<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Mahasiswa::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->save();

        return response()->json([
            'nama' => $mahasiswa->nama,
            'nim' => $mahasiswa->nim,
            'alamat' => $mahasiswa->alamat,
            'jurusan' => $mahasiswa->jurusan,
            'result' => 'Data Berhasil Masuk'

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama = $request->nama;
        $nim = $request->nim;
        $alamat = $request->alamat;
        $jurusan = $request->jurusan;

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $nama;
        $mahasiswa->nim = $nim;
        $mahasiswa->alamat = $alamat;
        $mahasiswa->jurusan = $jurusan;
        $mahasiswa->save();

        return response()->json([
            'nama' => $mahasiswa->nama,
            'nim' => $mahasiswa->nim,
            'alamat' => $mahasiswa->alamat,
            'jurusan' => $mahasiswa->jurusan,
            'result' => 'Data Berhasil di Update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return 'Data Berhasil di Hapus';
    }
}
