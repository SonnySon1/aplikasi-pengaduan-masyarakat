<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
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

        return [
            'nama' => fake()->name(),
            "nik"  => fake()->unique()->nik(),
            "alamat" => "Banjar",
            "jenis_kelamin" => "L",
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('123'), 
            'no_telepon' => fake()->unique()->phoneNumber(),
            'role' => fake()->randomElement(['masyarakat', 'petugas', 'admin']),
            'foto' => $photo
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
