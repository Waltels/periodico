<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'slug'=>'Educación',
            'estado'=>random_int(0,1),
        ]);
        Categoria::create([
            'slug'=>'Deportes',
            'estado'=>random_int(0,1),
        ]);
        Categoria::create([
            'slug'=>'Cultura',
            'estado'=>random_int(0,1),
        ]);
        Categoria::create([
            'slug'=>'Sindical',
            'estado'=>random_int(0,1),
        ]);
    }
}
