<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Kelurahan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelurahans')->insert([

            // Aceh
            ['id' => 20, "id_kecamatan" => 20, "kode_kelurahan" => 10, "nama_kelurahan" => "Alue Bakong"],
            ['id' => 21, "id_kecamatan" => 20, "kode_kelurahan" => 11, "nama_kelurahan" => "Gunong Panah"],

            ['id' => 22, "id_kecamatan" => 21, "kode_kelurahan" => 12, "nama_kelurahan" => "Bukit Jaya"],
            ['id' => 23, "id_kecamatan" => 21, "kode_kelurahan" => 13, "nama_kelurahan" => "Balee"],

            ['id' => 24, "id_kecamatan" => 22, "kode_kelurahan" => 14, "nama_kelurahan" => "Angan"],
            ['id' => 25, "id_kecamatan" => 22, "kode_kelurahan" => 15, "nama_kelurahan" => "Siem"],

            ['id' => 26, "id_kecamatan" => 23, "kode_kelurahan" => 16, "nama_kelurahan" => "Cot Paya"],
            ['id' => 27, "id_kecamatan" => 23, "kode_kelurahan" => 17, "nama_kelurahan" => "Kajhu"],

            ['id' => 28, "id_kecamatan" => 24, "kode_kelurahan" => 18, "nama_kelurahan" => "Bintah"],
            ['id' => 29, "id_kecamatan" => 24, "kode_kelurahan" => 19, "nama_kelurahan" => "Teupin Ara"],

            ['id' => 30, "id_kecamatan" => 25, "kode_kelurahan" => 20, "nama_kelurahan" => "Gampong Drien"],
            ['id' => 31, "id_kecamatan" => 25, "kode_kelurahan" => 21, "nama_kelurahan" => "Gampong Rumia"],

            // Sumatera Utara
            ['id' => 32, "id_kecamatan" => 26, "kode_kelurahan" => 22, "nama_kelurahan" => "Aek Ledong"],
            ['id' => 33, "id_kecamatan" => 26, "kode_kelurahan" => 23, "nama_kelurahan" => "Buntu Pane"],

            ['id' => 34, "id_kecamatan" => 27, "kode_kelurahan" => 24, "nama_kelurahan" => "Rahuning"],
            ['id' => 35, "id_kecamatan" => 27, "kode_kelurahan" => 25, "nama_kelurahan" => "Meranti"],

            ['id' => 37, "id_kecamatan" => 28, "kode_kelurahan" => 26, "nama_kelurahan" => "Brandan Timur"],
            ['id' => 38, "id_kecamatan" => 28, "kode_kelurahan" => 27, "nama_kelurahan" => "Pelawi Utara"],

            ['id' => 39, "id_kecamatan" => 29, "kode_kelurahan" => 28, "nama_kelurahan" => "Tamaran"],
            ['id' => 40, "id_kecamatan" => 29, "kode_kelurahan" => 29, "nama_kelurahan" => "Cempa"],

            ['id' => 41, "id_kecamatan" => 30, "kode_kelurahan" => 30, "nama_kelurahan" => "Bukateja"],
            ['id' => 42, "id_kecamatan" => 30, "kode_kelurahan" => 10, "nama_kelurahan" => "Bobotsari"],

            ['id' => 43, "id_kecamatan" => 31, "kode_kelurahan" => 31, "nama_kelurahan" => "Ajibata"],
            ['id' => 44, "id_kecamatan" => 31, "kode_kelurahan" => 32, "nama_kelurahan" => "Balige"],

            // Sumatera Selatan
            ['id' => 45, "id_kecamatan" => 32, "kode_kelurahan" => 33, "nama_kelurahan" => "Bakaran"],
            ['id' => 46, "id_kecamatan" => 32, "kode_kelurahan" => 34, "nama_kelurahan" => "Komperta"],

            ['id' => 47, "id_kecamatan" => 33, "kode_kelurahan" => 35, "nama_kelurahan" => "Pulo Kerto"],
            ['id' => 48, "id_kecamatan" => 33, "kode_kelurahan" => 36, "nama_kelurahan" => "Karang Jaya"],

            ['id' => 57, "id_kecamatan" => 34, "kode_kelurahan" => 37, "nama_kelurahan" => "Campur Sari"],
            ['id' => 58, "id_kecamatan" => 34, "kode_kelurahan" => 38, "nama_kelurahan" => "Jajaran Baru"],

            ['id' => 49, "id_kecamatan" => 35, "kode_kelurahan" => 39, "nama_kelurahan" => "Buana Murti"],
            ['id' => 50, "id_kecamatan" => 35, "kode_kelurahan" => 40, "nama_kelurahan" => "Budi Asih"],

            ['id' => 51, "id_kecamatan" => 36, "kode_kelurahan" => 41, "nama_kelurahan" => "Cendana"],
            ['id' => 52, "id_kecamatan" => 36, "kode_kelurahan" => 42, "nama_kelurahan" => "Argo Mulyo"],

            ['id' => 53, "id_kecamatan" => 37, "kode_kelurahan" => 43, "nama_kelurahan" => "Anyar"],
            ['id' => 54, "id_kecamatan" => 37, "kode_kelurahan" => 44, "nama_kelurahan" => "Pendingan"],

           // Riau
            ['id' => 55, "id_kecamatan" => 38, "kode_kelurahan" => 45, "nama_kelurahan" => "Teluk Rhu"],
            ['id' => 56, "id_kecamatan" => 38, "kode_kelurahan" => 46, "nama_kelurahan" => "Kadur"],

            ['id' => 59, "id_kecamatan" => 39, "kode_kelurahan" => 47, "nama_kelurahan" => "Lateri"],
            ['id' => 60, "id_kecamatan" => 39, "kode_kelurahan" => 48, "nama_kelurahan" => "Tihu"],

            ['id' => 61, "id_kecamatan" => 40, "kode_kelurahan" => 49, "nama_kelurahan" => "Libo Jaya"],
            ['id' => 62, "id_kecamatan" => 40, "kode_kelurahan" => 50, "nama_kelurahan" => "Langkai"],

            ['id' => 63, "id_kecamatan" => 41, "kode_kelurahan" => 51, "nama_kelurahan" => "Bungsur"],
            ['id' => 64, "id_kecamatan" => 41, "kode_kelurahan" => 52, "nama_kelurahan" => "Harapan"],

            ['id' => 65, "id_kecamatan" => 42, "kode_kelurahan" => 53, "nama_kelurahan" => "Alur Kuning"],
            ['id' => 66, "id_kecamatan" => 42, "kode_kelurahan" => 54, "nama_kelurahan" => "Batu Sasak"],

            ['id' => 67, "id_kecamatan" => 43, "kode_kelurahan" => 55, "nama_kelurahan" => "Air Terbit"],
            ['id' => 68, "id_kecamatan" => 43, "kode_kelurahan" => 56, "nama_kelurahan" => "Batugajah"],

            // Jambi
            ['id' => 69, "id_kecamatan" => 44, "kode_kelurahan" => 57, "nama_kelurahan" => "Kuto Rawang"],
            ['id' => 70, "id_kecamatan" => 44, "kode_kelurahan" => 58, "nama_kelurahan" => "Kuto Renah"],

            ['id' => 71, "id_kecamatan" => 45, "kode_kelurahan" => 59, "nama_kelurahan" => "Empang Benao"],
            ['id' => 72, "id_kecamatan" => 45, "kode_kelurahan" => 60, "nama_kelurahan" => "Jelatang"],

            ['id' => 73, "id_kecamatan" => 46, "kode_kelurahan" => 61, "nama_kelurahan" => "Purnama"],
            ['id' => 74, "id_kecamatan" => 46, "kode_kelurahan" => 62, "nama_kelurahan" => "Mekar Sari"],

            ['id' => 75, "id_kecamatan" => 47, "kode_kelurahan" => 63, "nama_kelurahan" => "Bungo Tanjung"],
            ['id' => 76, "id_kecamatan" => 47, "kode_kelurahan" => 64, "nama_kelurahan" => "Malako Intan"],

            ['id' => 77, "id_kecamatan" => 48, "kode_kelurahan" => 65, "nama_kelurahan" => "Cempaka"],
            ['id' => 78, "id_kecamatan" => 48, "kode_kelurahan" => 66, "nama_kelurahan" => "Dusun Diilir"],

       ]);
    }
}