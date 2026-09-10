<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\jurusan;
class jurusanController extends Controller
{
    public function simpan(Request $request)
    {
        $data = new jurusan();
        $data->nama_jurusan = $request->nama_jurusan;
        $data->deskripsi_jurusan = $request->deskripsi_jurusan;
        $data->save();
        return redirect('/data_jurusan')->with('success', 'Data berhasil ditambahkan!');
    }
    public function index()
    {
        $data = jurusan::all();
        return view('data_jurusan', compact('data'));
    }
    public function getData()
    {
        $data = jurusan::select(
            'id_jurusan',
            'nama_jurusan',
            'deskripsi_jurusan',
        )->get();
        return response()->json($data);
    }
}
