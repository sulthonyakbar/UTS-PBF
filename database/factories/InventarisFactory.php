<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventaris>
 */
class InventarisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->name(),
            'jenis_barang' => $this->faker->randomElement(['Elektronik', 'Non Elektronik']),
            'deskripsi_barang' => $this->faker->text(),
            'harga' => $this->faker->randomNumber(),
            'tgl_diperoleh' => $this->faker->date(),
            'sumber' => $this->faker->randomElement(['Pemerintah', 'Dana Desa', 'Bantuan']),
            'status' => $this->faker->randomElement(['Baru', 'Bekas']),
            'jumlah' => $this->faker->randomNumber(),
        ];
    }
}
