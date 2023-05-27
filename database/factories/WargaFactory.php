<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warga>
 */
class WargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {        
        return [
            'nik' => $this->faker->unique()->numerify('################'),
            'nama' => $this->faker->name(),
            'tgl_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'alamat' => $this->faker->address(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu']),
            'pekerjaan' => $this->faker->jobTitle()
        ];
    }
}
