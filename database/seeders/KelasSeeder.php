<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
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
                "kelas" => 10,
            ],
            [
                "id" => 2,
                "kelas" => 11,
            ],
            [
                "id" => 3,
                "kelas" => 12,
            ],
        ];

        DB::table('kelas')->insert($data);
    }
}
