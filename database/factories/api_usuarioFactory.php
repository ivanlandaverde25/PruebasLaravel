<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\api_usuario>
 */
class api_usuarioFactory extends Factory
{

    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nickname' => $this->faker->randomElement(['Iván', 'Karla', 'Marisol', 'Jabcely', 'Nelsón', 'Gabriela', 'Cristian', 'Alejandro', 'Daniel',]),
            'nombre' => $this->faker->name(),
            'contrasena' => static::$password ??= Hash::make('password'),
            'fecha_cumpleanio' => $this->faker->randomElement(['2024-03-04 16:14:10', '2024-03-09 16:14:10'])
        ];
    }
}
