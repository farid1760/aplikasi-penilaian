<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
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
                "mapel" => "Pemrograman Dasar",
                "id_jurusan" => 1,
            ],
            [
                "id" => 2,
                "mapel" => "Inggris",
                "id_jurusan" => 2,
            ],
            [
                "id" => 3,
                "mapel" => "Microsoft Excel",
                "id_jurusan" => 3,
            ],
            [
                "id" => 4,
                "mapel" => "Desain Grafis",
                "id_jurusan" => 4,
            ],
            [
                "id" => 5,
                "mapel" => "Bongkar Mesin Mobil",
                "id_jurusan" => 5,
            ],
            [
                "id" => 6,
                "mapel" => "Bongkar Mesin Motor",
                "id_jurusan" => 6,
            ],
            [
                "id" => 7,
                "mapel" => "Matematika",
                "id_jurusan" => 7,
            ],
        ];

        DB::table('mapels')->insert($data);
    }
}
