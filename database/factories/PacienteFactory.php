<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CI' ,
            'Nombres',
            'Apellidos',
            'Sexo',
            'Edad',
            'Estado_Civil',
            'Grado_de_Instruccion',
            'Ocupacion_Actual',
            'Procedencia',
            'Residencia',
            'Fuente_de_Informacion',
            'email',
        ];
    }
}
