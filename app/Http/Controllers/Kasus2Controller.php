<?php

namespace App\Http\Controllers;
use App\Controllers\DB;
use App\Models\Rw;
use App\Models\Kasus2;
use Illuminate\Http\Request;

class Kasus2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kasus2 = Kasus2::with('rw')->get();
        return view('kasus2.index', compact('kasus2'));
    }
    public function create()
    {
        $rw = Rw::all();
        return view ('kasus2.create', compact('rw'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_rw' => 'required',
            'jumlah_positif' => 'required|min:1',
            'jumlah_meninggal' => 'required|min:1',
            'jumlah_sembuh' => 'required|min:1',
            
        ],[
            'id_rw.required' => 'Rw is required',
            'jumlah_positif.required' => 'Jumlah Positif is required',
            'jumlah_positif.min' => 'Jumlah Positif tidak boleh min',
            'jumlah_meninggal.required' => 'Jumlah Meninggal required',
            'jumlah_meninggal.min' => 'Jumlah meninggal tidak boleh min',
            'jumlah_sembuh.required' => 'Jumlah Sembuh required',
            'jumlah_sembuh.min' => 'Jumlah Sembuh tidak boleh min',
        ]);
        $kasus2 = new Kasus2;
        $kasus2->id_rw = $request->id_rw;
        $kasus2->jumlah_positif = $request->jumlah_positif;
        $kasus2->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus2->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with(['message' => 'Data Kasus2 Berhasil disimpan']);
    }
    public function show($id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        return view('kasus2.show', compact('kasus2'));
    }
    public function edit($id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        $rw = Rw::all();
        return view('kasus2.edit', compact('kasus2', 'rw'))->with(['message' => 'Data Kasus2 Berhasil diedit']);
    }
    public function update(Request $request, $id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        $kasus2->id_rw = $request->id_rw;
        $kasus2->jumlah_positif = $request->jumlah_positif;
        $kasus2->jumlah_meninggal = $request->jumlah_meninggal;
        $kasus2->jumlah_sembuh = $request->jumlah_sembuh;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with(['message' => 'Data Kasus2 Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        $kasus2->delete();
        return redirect()->route('kasus2.index')->with(['message' => 'Data Kasus2 Berhasil diHapus']);
    }
}

