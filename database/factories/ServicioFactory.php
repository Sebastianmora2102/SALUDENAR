<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $options =[
           'Servicio de medicina general',
           'Servicio de odontología general',
           'Área de procedimientos mínimos',
           'Servicio de psicología clínica',

        ];

        return [
            'name' => Arr::random($options),
        ];
    }
}
