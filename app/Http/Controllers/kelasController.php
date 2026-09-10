<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Jurusan;

class kelasController extends Controller
{
    public function input_data_kelas()
    {
        $jurusan = Jurusan::all();
        return view('input_data_kelas', compact('jurusan'));
    }
    public function simpan(Request $request)
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->tingkat = $request->tingkat;
        $kelas->id_jurusan = $request->jurusan;
        $kelas->save();
        return redirect()->to('data_kelas');
    }
    public function data_kelas()
    {
        $kelas = Kelas::all();
        return view('data_kelas', compact('kelas'));
    }
   public function getData()
{
    return response()->json(
        Kelas::join('jurusans', 'kelas.id_jurusan', '=', 'jurusans.id_jurusan')
            ->select(
                'kelas.id_kelas',
                'kelas.nama_kelas',
                'kelas.tingkat',
                'jurusans.nama_jurusan'
            )
            ->get()
    );
}
}
