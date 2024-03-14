<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\paciente>
 */
class pacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'primer_nombre' => $this->faker->randomElement(['Ivan', 'Karla', 'Gabriela', 'Karla', 'Nelsón', 'Marisol', 'Cristian', 'José']),
            'primer_apellido' => $this->faker->randomElement(['Mendoza', 'Portillo', 'Mendoza', 'López', 'Mendoza', 'Landaverde', 'Siguenza', 'Landaverde']),
            'segundo_nombre' => $this->faker->randomElement(['Alessandro', 'Iveth', 'Ana', 'Maricela', 'Iván', 'Lissbeth', 'José', 'Alejandro']),
            'segundo_apellido' => $this->faker->randomElement(['Landaverde', 'Cruz', 'Carranza', 'López', 'Mejía', 'Oliva', 'Mendez', 'Claros']),
            'direccion' => $this->faker->text(),
            'tipo_documento' => $this->faker->randomElement(['DUI', 'NIT', 'CUN', 'NUI', 'Pasaporte', 'Partida Nacimiento']),
            'numero_documento' => $this->faker->randomElement(['06208269-4', '02209626-3', '02570257-0']),
        ];
    }
}
