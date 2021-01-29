<?php

namespace App\Http\Controllers;
use App\Controllers\DB;
use App\Models\Negara;
use App\Models\Kasus;
use Illuminate\Http\Request;

class KasusController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kasus = Kasus::with('negara')->get();
        return view('kasus.index', compact('kasus'));
    }
    public function create()
    {
        $negara = Negara::all();
        return view ('kasus.create', compact('negara'));
    }
    public function store(Request $request)
    {
        $kasus = new Kasus;
        $kasus->id_negara = $request->id_negara;
        $kasus->jumlah_positif = $request->jumlah_positif;
        $kasus->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')->with(['message' => 'Data Kasus Berhasil disimpan']);
    }
    public function show($id)
    {
        $kasus = Kasus::findOrFail($id);
        return view('kasus.show', compact('kasus'));
    }
    public function edit($id)
    {
         $kasus2 = Kasus2::findOrFail($id);
        $rw = RW::all();
        return view('kasus2.edit', compact('kasus2', 'rw'));
    }
    public function update(Request $request, $id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->id_negara = $request->id_negara;
        $kasus->jumlah_positif = $request->jumlah_positif;
        $kasus->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus->tanggal = $request->tanggal;
        $kasus->save();
        return redirect()->route('kasus.index')->with(['message' => 'Data Kasus Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $kasus = Kasus::findOrFail($id);
        $kasus->delete();
        return redirect()->route('kasus.index')->with(['message' => 'Data Kasus Berhasil diHapus']);
    }
}

