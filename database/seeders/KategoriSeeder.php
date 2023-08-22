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
            'kategori'=>'Infrastruktur',
            'deskripsi'=>'Deskripsi Tentang kategori yang berkaitan dengan infrastruktur'
        ];
        
        Kategori::create($data);
    }
}
