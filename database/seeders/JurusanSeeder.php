<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "id" => 1,
                "jurusan" => "Rekayasa Perangkat Lunak",
                "singkatan" => "RPL",
            ],
            [
                "id" => 2,
                "jurusan" => "Administrasi Perhotelan",
                "singkatan" => "APH",
            ],
            [
                "id" => 3,
                "jurusan" => "Akutansi Dan Keuangan Lembaga",
                "singkatan" => "AKL",
            ],
            [
                "id" => 4,
                "jurusan" => "Multimedia",
                "singkatan" => "MM",
            ],
            [
                "id" => 5,
                "jurusan" => "Teknik Kendaraan Ringan",
                "singkatan" => "TKR",
            ],
            [
                "id" => 6,
                "jurusan" => "Teknik Sepeda Motor",
                "singkatan" => "TSM",
            ],
            [
                "id" => 7,
                "jurusan" => "Umum",
                "singkatan" => "Umum",
            ],
        ];

        DB::table('jurusans')->insert($data);
    }
}
