<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'spesies' => fake()->randomElement(['Kucing', 'Anjing', 'Kelinci', 'Hamster', 'Burung']),
            'ras' => fake()->randomElement(['Lokal', 'Campuran', 'Impor', 'Ras Murni']),
            'jenis_kelamin' => fake()->randomElement(['Jantan', 'Betina']),
            'umur_bulan' => fake()->numberBetween(1, 60),
            'harga' => fake()->numberBetween(100000, 5000000),
            'status' => fake()->randomElement(['Tersedia', 'Terjual']),
        ];
    }
}
