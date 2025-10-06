<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Habilidades;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado_habilidades>
 */
class EmpleadoHabilidadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'empleado_id' => Empleado::inRandomOrder()->first()?->id,
            'habilidad_id' => Habilidades::inRandomOrder()->first()?->id,

        ];
    }
}
