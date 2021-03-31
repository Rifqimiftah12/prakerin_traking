<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Kasus2;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       //Data SeIndonesia
        $positif = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_meninggal','kasus2s.jumlah_sembuh')->join('kasus2s',
                'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
         $sembuh = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_meninggal','kasus2s.jumlah_sembuh')->join('kasus2s',
                'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
        $meninggal = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_meninggal','kasus2s.jumlah_sembuh')->join('kasus2s',
                'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');

                $data = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi', '=', 'provinsis.id')
                ->join('kecamatans','kecamatans.id_kota', '=', 'kotas.id')
                ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
                ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
                ->join('kasus2s','kasus2s.id_rw', '=', 'rws.id')
                ->select('nama_provinsi',
                DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
                DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'),
                DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'))
                ->groupBy('nama_provinsi')
                ->get();
      

                return view('home', compact('positif','sembuh','meninggal','data'));
    }
}
