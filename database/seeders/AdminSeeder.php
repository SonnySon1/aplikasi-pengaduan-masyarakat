<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataAdmin = [
            "nama"  => "eko",
            "nik"   => "123123",
            "alamat"    => "Bandung",
            "email" => "eko@gmail.com",
            "password" => bcrypt('123'),
            "no_telepon"    => "1231231",
            "role" => "admin"
        ];
        User::create($dataAdmin);
    }
}
