<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kasus2;
use App\Models\Rw;
use App\Models\Kota;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function getReportProvinsi()
    {
        return view('report.provinsi');
    }

    public function ReportProvinsi(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        if ($awal < $akhir) {

            $provinsi = Provinsi::select('provinsis.id', 'provinsis.nama_provinsi', 'provinsis.kode_provinsi', 'kasus2s.tanggal', 'kasus2s.jumlah_positif', 'kasus2s.jumlah_sembuh', 'kasus2s.jumlah_meninggal')
                ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
                ->whereBetween('kasus2s.tanggal', [$awal, $akhir])
                ->get();
            return view('report.provinsi', compact('provinsi'));
        } elseif ($awal > $akhir) {
            return redirect()->back()->with(['error' => 'Tanggal yang dimasukkan tidak valid']);

        }
    }
    public function  kasus(){
        $kasus = Kasus2::with('rw')->get();
        $pdf = PDF::loadView('report.kasuspdf', compact('kasus'));
        return $pdf->download('laporan-kasus.pdf');
    }
}