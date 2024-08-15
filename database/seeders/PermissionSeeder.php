<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name'=>'Ver Articulo',
        ]);
        Permission::create([
            'name'=>'Crear Articulo',
        ]);
        Permission::create([
            'name'=>'Editar Articulo',
        ]);
        Permission::create([
            'name'=>'Publicar Articulo',
        ]);
        Permission::create([
            'name'=>'Ver Publicaciones',
        ]);
        Permission::create([
            'name'=>'Ver Portada',
        ]);
        Permission::create([
            'name'=>'Editar Portada',
        ]);
        Permission::create([
            'name'=>'Ver Usuarios',
        ]);
        Permission::create([
            'name'=>'Ver Permisos',
        ]);
        Permission::create([
            'name'=>'Ver Roles',
        ]);
    }
}
