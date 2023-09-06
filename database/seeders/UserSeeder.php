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
        // photo profile default 
        $photoProfile = [
            'profile1.png',
            'profile2.png',
            'profile3.png',
            'profile4.png',
            'profile5.png',
            'profile6.png',
            'profile7.png',
            'profile8.png',
            'profile9.png',
            'profile10.png',
       ];

       // mix photo
       $photoRandom = rand(0, 9);
       $photo = $photoProfile[$photoRandom];

        User::create([
            "nama"  => "eko",
            "nik"   => "123123",
            "alamat"    => "Bandung",
            "email" => "eko@gmail.com",
            "password" => bcrypt('123'),
            "no_telepon"    => "1231231",
            "foto"    => $photo,
            "role" => "admin"
        ]);
        User::create([
            "nama" => "soni",
            "nik"=>"123123123",
            "alamat"=>"Banjar",
            "email"=>"soni@gmail.com",
            "password"=> bcrypt("123"),
            "foto"=> $photo,
            "no_telepon"=>"089899587003",
        ]);

    }
}
