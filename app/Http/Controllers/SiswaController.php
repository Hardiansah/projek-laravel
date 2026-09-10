<?php
namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Jurusan;
class SiswaController extends Controller
{
    public function siswa()
    {
        $kelas = Kelas::all();
        return view('input_data_siswa', compact('kelas'));
    }
    public function simpan(Request $request)
    {
       $siswa = new Siswa;
       $siswa->nis = $request->nis;
       $siswa->nama = $request->nama;
       $siswa->id_kelas = $request->kelas;
       $siswa->save();
       return redirect('/data')->with('success', 'Data berhasil ditambahkan!');
    }
    public function index()
    {
        $data = Siswa::all();
        return view('data', compact('data'));
    }
   public function getData()
    {
    $siswa = Siswa::query()
        ->join('kelas', 'siswas.id_kelas', '=', 'kelas.id_kelas')
        ->join('jurusans', 'kelas.id_jurusan', '=', 'jurusans.id_jurusan')
        ->select(
            'siswas.id_siswa',
            'siswas.nis',
            'siswas.nama',
            'kelas.id_kelas',
            'kelas.nama_kelas',
            'jurusans.nama_jurusan')
        ->get();
    return response()->json($siswa);
    }
}
