<?php

namespace Database\Factories;

use DateTime;
use DateTimeZone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengaduan>
 */
class PengaduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => 12,
            "kategori_id"  => fake()->numberBetween(1,2),
            "judul_pengaduan"   => fake()->text(50),
            "tgl_pengaduan" => now(),
            "laporan_pengaduan" => fake()->text(100),
            "foto"  => "030923040636.jpg",
        ];  
    }
}
