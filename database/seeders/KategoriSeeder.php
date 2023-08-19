<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'kategori'=>'Pencemaran',
            'deskripsi'=>'Deskripsi Tentang Pencemaran'
        ];
        
        Kategori::create($data);
    }
}
