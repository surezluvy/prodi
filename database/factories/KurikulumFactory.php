<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class KurikulumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => $this->faker->name(),
            'name' => $this->faker->name(),
            'syarat_ambil' => $this->faker->name(),
            'syarat_lulus' => $this->faker->name(),
            'jenis_mk' => $this->faker->name(),
            'sks' => $this->faker->name(),
        ];
    }
}
