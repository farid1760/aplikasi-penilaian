<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
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
                "name" => "Muhammad Ikhsan Bintang",
                "email" => "ikhsanbintang3292@gmail.com",
                "password" => Hash::make('admin123'),
                "role" => 'admin'
            ],
            [
                "id" => 2,
                "name" => "Farid Akhmal Untoro",
                "email" => "assasinzm410@gmail.com",
                "password" => Hash::make('farid123'),
                "role" => 'guru'
            ],
            [
                "id" => 3,
                "name" => "Muhamad Mustopa Bisri",
                "email" => "topa123@gmail.com",
                "password" => Hash::make('topa123'),
                "role" => 'murid'
            ],
        ];

        DB::table('users')->insert($data);
    }
}
