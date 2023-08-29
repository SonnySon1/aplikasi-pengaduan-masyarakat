<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create([
            "user_id" => 1,
            "kategori_id" => 1,
            "judul_pengaduan" =>"Jalanan Berlubang di Dusun Margaluyu RT05 RW08 di jalan uwen",
            "tgl_pengaduan" => now(),
            "laporan_pengaduan" => 'Ada Sebuah jalanan berlubang di daerah Dusun Margaluyu RT05 RW08 di jalan uwen penyebab nya adalah karena sering banyak truck yang sering berlalu lalang di sekiter daerah tersebut yang kibatkan jalanan tidak merata dan menjadi bergelombang mohon solusinya!',
            "foto" => '220823034856.jpg'
        ]);
    }
}
