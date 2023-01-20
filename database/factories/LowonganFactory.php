<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lowongan>
 */
class LowonganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul_lowongan' => fake()->numerify('Lowongan #'),
            'deskripsi' => fake()->paragraph(),
            'tanggal_dibuka' => '2023-02-23',
            'tanggal_dibuka' => '2023-03-23',
            'id_active' => 1,
        ];
    }
}
