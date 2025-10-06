<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Centro>
 */
class CentroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'nombre' => $this->faker->word(),
            'poblacion' => $this->faker->randomElement([10.000,20.000]),
            'direccion' => $this->faker->address(),
            'codigo_emepleado_director' => $this->faker->randomElement([1,2,3,4,5]),

           

        ];
    }
}
