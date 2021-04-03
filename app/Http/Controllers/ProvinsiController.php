<?php

namespace App\Http\Controllers;
use App\Controllers\DB;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $provinsi = Provinsi::all();
       return view('provinsi.index', compact('provinsi'));
    }
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('provinsi.create' ,compact('provinsi'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_provinsi' => 'required|int|unique:provinsis|max:34',
            'nama_provinsi' => 'required|unique:provinsis',
        ],[
            'kode_provinsi.required' => 'Kode is required',
            'kode_provinsi.max' => 'Jumlah Provinsi tidak boleh lebih dari 34 karena provinsi cuman ada 34',
            'nama_provinsi.required' => 'Provinsi required'
        ]);

        $provinsi = new Provinsi;
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');
    }
    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show', compact('provinsi'));
    }
    public function edit($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', compact('provinsi'));
    }
    public function update(Request $request, $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index')->with(['message' => 'Data Provinsi Berhasil diedit']);
    }

    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();
        return redirect()->route('provinsi.index')->with(['message' => 'Data provinsi Berhasil dihapus']);
    }
}
