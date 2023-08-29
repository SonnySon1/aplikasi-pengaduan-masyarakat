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
            "nama" => "soni",
            "nik"=>"123123123",
            "alamat"=>"Banjar",
            "email"=>"soni@gmail.com",
            "password"=> bcrypt("123"),
            "no_telepon"=>"089899587003",
        ]);
    }
}
