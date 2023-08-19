<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUser = [
            "nama" => "soni",
            "nik"=>"123123123",
            "alamat"=>"Banjar",
            "email"=>"soni@gmail.com",
            "password"=> bcrypt("123"),
            "no_telepon"=>"089899587003",
        ];
        User::create($dataUser);
    }
}
