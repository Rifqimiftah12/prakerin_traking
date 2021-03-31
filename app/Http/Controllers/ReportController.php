<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getReportProvinsi()
    {
        return view('admin.reports.provinsi');
    }

    public function ReportProvinsi(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        if ($awal < $akhir) {

            $provinsi = Provinsi::select('provinsis.id', 'provinsis.nama_provinsi', 'provinsis.kode_provinsi', 'kasus2.tanggal', 'kasus2.jumlah_positif', 'kasus2.jumlah_sembuh', 'kasus2.jumlah_meninggal')
                ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kasus2', 'rws.id', '=', 'kasus2.id_rw')
                ->whereBetween('kasus2.tanggal', [$awal, $akhir])
                ->get();
            return view('admin.reports.provinsi', compact('provinsi'));
        } elseif ($awal > $akhir) {
            return redirect()->back()->with(['error' => 'Tanggal yang dimasukkan tidak valid']);

        }
    }
}