<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kasus2;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function hari(){
        //Data Perhari
        $kasus2 = kasus2::get('created_at')->last();
        $jumlah_positif = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_positif');
        $jumlah_sembuh = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_sembuh');
        $jumlah_meninggal = kasus2::where('tanggal', date('Y-m-d'))->sum('jumlah_meninggal');

        $join = DB::table('kasus2s')
                    ->select('jumlah_positif', 'jumlah_sembuh', 'jumlah_meninggal')
                    ->join('rws' ,'kasus2s.id_rw', '=', 'rws.id')
                    ->get();
        $arr1 = [
            'jumlah_positif' =>$join->sum('jumlah_positif'),
            'jumlah_sembuh' =>$join->sum('jumlah_sembuh'),
            'jumlah_meninggal' =>$join->sum('jumlah_meninggal'),
        ];
        $arr2 = [
            'jumlah_positif' =>$jumlah_positif,
            'jumlah_sembuh' =>$jumlah_sembuh,
            'jumlah_meninggal' =>$jumlah_meninggal,
        ];
        $arr = [
            'status' => 200,
            'data' => [
                'Hari Ini' => $arr2,
                'Indonesia' => $arr1
            ],
            'message' => 'Berhasil'
        ];
        
        return response()->json($arr, 200);
    }

    public function provinsi($id)
    {
        //Data Provinsi Dengan Id
        $data = DB::table('provinsis')
        ->join('kotas','kotas.id_provinsi', '=', 'provinsis.id')
        ->join('kecamatans','kecamatans.id_kota', '=', 'kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw', '=', 'rws.id')
        ->where('provinsis.id',$id)
        ->select('nama_provinsi',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'))
        ->groupBy('nama_provinsi')
        ->get();
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }

    public function provinsi1()
    {
        //Data Provinsi 
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
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }

    public function kota()
    {
        //Data Kota 
        $data = DB::table('kotas')
        ->join('kecamatans','kecamatans.id_kota', '=', 'kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw', '=', 'rws.id')
        ->select('nama_kota',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'))
        ->groupBy('nama_kota')
        ->get();
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }

    public function kecamatan()
    {
        //Data Kota 
        $data = DB::table('kecamatans')
        ->join('kelurahans','kelurahans.id_kecamatan', '=', 'kecamatans.id')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw', '=', 'rws.id')
        ->select('nama_kecamatan',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'))
        ->groupBy('nama_kecamatan')
        ->get();
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }

    public function kelurahan()
    {
        //Data Kota 
        $data = DB::table('kelurahans')
        ->join('rws','rws.id_kelurahan', '=', 'kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw', '=', 'rws.id')
        ->select('nama_kelurahan',
        DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
        DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'),
        DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'))
        ->groupBy('nama_kelurahan')
        ->get();
                $res = [
                    'succsess' => true,
                    'Data' => $data,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }

    public function indonesia()
    {
      

        //Data SeIndonesia
        $positif = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_meninggal','kasus2s.jumlah_sembuh')->join('kasus2s',
                'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
        $meninggal = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_meninggal','kasus2s.jumlah_sembuh')->join('kasus2s',
                'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        $sembuh = DB::table('rws')
        ->select('kasus2s.jumlah_positif','kasus2s.jumlah_meninggal','kasus2s.jumlah_sembuh')->join('kasus2s',
                'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');

                $res = [
                    'succsess' => true,
                    'Data' => 'Data Kasus Indonesia',
                    'Jumlah Positif' => $positif,
                    'Jumlah Meninggal' => $meninggal,
                    'Jumlah Sembuh' => $sembuh,
                    'message' => 'Data Kasus Di Tampilkan'
                ];
                return response()->json($res,200);
    }
    public function global()
    {
        $data = Http::get('https://api.kawalcorona.com/')->json();
        $hasil = [
           'Success' => true,
           'Data' => $data,
           'message' => 'Data Kasus Di Tampilkan'

       ];
       return response()->json($hasil,200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
