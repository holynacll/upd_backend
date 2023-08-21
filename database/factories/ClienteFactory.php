<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'cpf' => fake()->cpf(false),
            'data_nasc' => now(),
            'sexo' => fake()->numberBetween(0, 1),
            'endereco' => fake()->address(),
            'mun_id' => fake()->numberBetween(1, 5570), //max id from Municipios
        ];
    }
}
