<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama"  => "eko",
            "nik"   => "123123",
            "alamat"    => "Bandung",
            "email" => "eko@gmail.com",
            "password" => bcrypt('123'),
            "no_telepon"    => "1231231",
            "role" => "admin"
        ]);
        User::create([
            "nama" => "soni",
            "nik"=>"123123123",
            "alamat"=>"Banjar",
            "email"=>"soni@gmail.com",
            "password"=> bcrypt("123"),
            "no_telepon"=>"089899587003",
        ]);

    }
}
