<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::makeDirectory('public/articulos');

        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ArticuloSeeder::class);
        $this->call(PortadaSeeder::class);

    }
}
