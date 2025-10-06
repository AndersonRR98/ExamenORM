<?php

namespace Database\Factories;

use App\Models\Departamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'num_hijos' => $this->faker->randomElement([1,2,3,4]),
            'telefono' => $this->faker->phoneNumber(),
            'departamento_id' => Departamento::inRandomOrder()->first()?->id,
        ];
    }
}
