<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Img;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $articulos = Articulo::factory(20)->create();

       foreach ($articulos as $articulo) {
        Img::factory(1)->create([
            'imgable_id'=> $articulo->id,
            'imgable_type'=> 'App\Models\Articulo',
        ]);
       }
    }

}
