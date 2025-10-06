<?php

namespace Database\Seeders;

use App\Models\Centro;
use App\Models\Departamento;
use App\Models\Empleado;
use App\Models\Empleadohabilidades;
use App\Models\Habilidades;
use App\Models\Hijo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Habilidades::factory(20)->create();
        Centro::factory(20)->create();
        Departamento::factory(20)->create();
        Empleado::factory(20)->create();
        Hijo::factory(20)->create();
        Empleadohabilidades::factory(20)->create();
     
    }
}
