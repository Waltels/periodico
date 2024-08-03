<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portada>
 */
class PortadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'portada'=> $this->faker->numberBetween($min = 1, $max = 7),
            'articulo_id'=> Articulo::all()->random()->id,
        ];
    }
}
