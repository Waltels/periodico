<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\Catepub;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = $this->faker->sentence(13);
        return [
            'titulo' => $titulo,
            'subtitulo' => $this->faker->sentence(),
            'contenido' => $this->faker->paragraph(),
            'slug' => Str::slug($titulo),
            'fecha'=>$this->faker->date(),
            'estado'=> $this->faker->randomElement([Articulo::Borrador, Articulo::Revisado, Articulo::Publicado]),
            'user_id'=> User::all()->random()->id,
            'categoria_id'=> Categoria::all()->random()->id,
            'catepub_id'=> Catepub::all()->random()->id,

        ];
    }
}
