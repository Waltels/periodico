<?php

namespace Database\Seeders;

use App\Models\Catepub;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatepubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catepub::create([
            'slug'=>'Mundo',
            'estado'=>random_int(0,1),
        ]);
        Catepub::create([
            'slug'=>'Politica',
            'estado'=>random_int(0,1),
        ]);
        Catepub::create([
            'slug'=>'Tecnologia',
            'estado'=>random_int(0,1),
        ]);
        Catepub::create([
            'slug'=>'Deportes',
            'estado'=>random_int(0,1),
        ]);
    }
}
