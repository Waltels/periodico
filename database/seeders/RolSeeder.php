<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role as ContractsRole;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $roles = Role::create(['name'=>'Escritor']);
       $roles->permissions()->attach([1, 2, 3,]);

       $rolee = Role::create(['name'=>'Editor']);
       $rolee->permissions()->attach([1, 4, 5, 6, 7,]);

       $role = Role::create(['name'=>'Administrador']);
       $role->permissions()->attach([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

       
    }
}
