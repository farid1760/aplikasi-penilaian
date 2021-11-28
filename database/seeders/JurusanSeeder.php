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
                "singaktan" => "RPL",
            ],
            [
                "id" => 2,
                "jurusan" => "Administrasi Perhotelan",
                "singaktan" => "APH",
            ],
            [
                "id" => 3,
                "jurusan" => "Akutansi Dan Keuangan Lembaga",
                "singaktan" => "AKL",
            ],
            [
                "id" => 4,
                "jurusan" => "Multimedia",
                "singaktan" => "MM",
            ],
            [
                "id" => 5,
                "jurusan" => "Teknik Kendaraan Ringan",
                "singaktan" => "TKR",
            ],
            [
                "id" => 6,
                "jurusan" => "Teknik Sepeda Motor",
                "singaktan" => "TSM",
            ],
            [
                "id" => 7,
                "jurusan" => "Umum",
                "singaktan" => "Umum",
            ],
        ];

        DB::table('jurusans')->insert($data);
    }
}
