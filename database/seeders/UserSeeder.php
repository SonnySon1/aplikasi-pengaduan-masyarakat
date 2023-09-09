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

        // admin
        User::create([
            "nama"      => "eko",
            "nik"       => "3279021009060001",
            "alamat"    => "Banjar",
            "email"     => "eko@gmail.com",
            "password"  => bcrypt('123'),
            "no_telepon"=> "08989978927",
            "foto"      => $photo,
            "role"      => "admin"
        ]);
        
        // petugas
        User::create([
            "nama"      => "jidan",
            "nik"       => "3279020208050002",
            "alamat"    => "Banjar",
            "email"     => "jidan@gmail.com",
            "password"  => bcrypt('123'),
            "no_telepon"=> "089277382612",
            "foto"      => $photo,
            "role"      => "petugas"
        ]);

        // masyarakat
        // User::create([
        //     "nama"      => "soni",
        //     "nik"       => "3279020102070003",
        //     "alamat"    => "Banjar",
        //     "email"     => "soni@gmail.com",
        //     "password"  => bcrypt("123"),
        //     "foto"      => $photo,
        //     "no_telepon"=> "089899587003",
        // ]);

    }
}
