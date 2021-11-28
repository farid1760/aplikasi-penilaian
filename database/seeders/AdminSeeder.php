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
                "email" => "admin@gmail.com",
                "password" => Hash::make('admin123'),
                "role" => 'admin'
            ],
        ];

        DB::table('users')->insert($data);
    }
}
