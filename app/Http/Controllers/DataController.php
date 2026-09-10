<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class DataController extends Controller
{
    public function simpan(Request $request)
    {
        Data::create([
        'nama'=> $request->nama,
        'alamat'=> $request->alamat,
        'tanggal'=> $request->tanggal,
        ]);
        return redirect('/data')->with('success', 'Data berhasil disimpan');

    }
    public function index()
    {
        return view('/data');
    }
    public function getData()
    {
        $data = Data::select(
            'id_data',
            'nama',
            'alamat',
            'tanggal'
        )->get();
        return response()->json($data);
    }
    public function destroy($id)
    {
        $data=Data::findOrFail($id);
        $data->delete();
        return redirect('/data');
    }
    public function edit ($id)
    {
        $data=Data::findOrFail($id);
        return view('edit',compact('data'));
    }

    public function update (Request $request,$id)
    {
        $data=Data::findOrFail($id);
        $data->nama=$request->nama;
        $data->alamat=$request->alamat;
        $data->tanggal=$request->tanggal;
        $data->save();
        return redirect('/data');
    }
}
