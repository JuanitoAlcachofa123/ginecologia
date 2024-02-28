<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Paciente 1
        $paciente = new Paciente();
        $paciente->CI = 2345678;
        $paciente->Nombres = 'María';
        $paciente->Apellidos = 'Gómez';
        $paciente->Sexo = 'F';
        $paciente->Edad = 25;
        $paciente->Estado_Civil = 'Casada';
        $paciente->Grado_de_Instruccion = 'Secundaria';
        $paciente->Ocupacion_Actual = 'Empleada';
        $paciente->Procedencia = 'Cochabamba';
        $paciente->Residencia = 'La Paz';
        $paciente->Fuente_de_Informacion = 'Amigo';
        $paciente->email = 'maria@example.com';
        $paciente->Celular = 75432198;
        $paciente->Tipo_de_Sangre = 'AB+';
        $paciente->Peso = 60.2;
        $paciente->Talla = 165.7;
        $paciente->Detalle = 'Detalles del paciente 2';
        $paciente->save();

        // Agrega aquí los datos de los otros pacientes de manera similar

        // Paciente 2
        $paciente = new Paciente();
        $paciente->CI = 3456789;
        $paciente->Nombres = 'Pedro';
        $paciente->Apellidos = 'Martínez';
        $paciente->Sexo = 'M';
        $paciente->Edad = 35;
        $paciente->Estado_Civil = 'Soltero';
        $paciente->Grado_de_Instruccion = 'Universitario';
        $paciente->Ocupacion_Actual = 'Abogado';
        $paciente->Procedencia = 'Santa Cruz';
        $paciente->Residencia = 'Santa Cruz';
        $paciente->Fuente_de_Informacion = 'Internet';
        $paciente->email = 'pedro@example.com';
        $paciente->Celular = 76321098;
        $paciente->Tipo_de_Sangre = 'O+';
        $paciente->Peso = 75.6;
        $paciente->Talla = 180.0;
        $paciente->Detalle = 'Detalles del paciente 3';
        $paciente->save();

           
            $paciente = new Paciente();
            $paciente->CI = 2345678;
            $paciente->Nombres = 'Yamila';
            $paciente->Apellidos = 'Gómez';
            $paciente->Sexo = 'F';
            $paciente->Edad = 25;
            $paciente->Estado_Civil = 'Casada';
            $paciente->Grado_de_Instruccion = 'Secundaria';
            $paciente->Ocupacion_Actual = 'Empleada';
            $paciente->Procedencia = 'Cochabamba';
            $paciente->Residencia = 'La Paz';
            $paciente->Fuente_de_Informacion = 'Amigo';
            $paciente->email = 'yamila@example.com';
            $paciente->Celular = 75432198;
            $paciente->Tipo_de_Sangre = 'AB+';
            $paciente->Peso = 60.2;
            $paciente->Talla = 165.7;
            $paciente->Detalle = 'Detalles del paciente 2';
            $paciente->save();
    
            // Paciente 3
            $paciente = new Paciente();
            $paciente->CI = 3456789;
            $paciente->Nombres = 'Alvaro';
            $paciente->Apellidos = 'Martínez';
            $paciente->Sexo = 'M';
            $paciente->Edad = 35;
            $paciente->Estado_Civil = 'Soltero';
            $paciente->Grado_de_Instruccion = 'Universitario';
            $paciente->Ocupacion_Actual = 'Abogado';
            $paciente->Procedencia = 'Santa Cruz';
            $paciente->Residencia = 'Santa Cruz';
            $paciente->Fuente_de_Informacion = 'Internet';
            $paciente->email = 'alvaro@example.com';
            $paciente->Celular = 76321098;
            $paciente->Tipo_de_Sangre = 'O+';
            $paciente->Peso = 75.6;
            $paciente->Talla = 180.0;
            $paciente->Detalle = 'Detalles del paciente 3';
            $paciente->save();
    
            // Paciente 4
            $paciente = new Paciente();
            $paciente->CI = 4567890;
            $paciente->Nombres = 'Ana';
            $paciente->Apellidos = 'López';
            $paciente->Sexo = 'F';
            $paciente->Edad = 40;
            $paciente->Estado_Civil = 'Divorciada';
            $paciente->Grado_de_Instruccion = 'Primaria';
            $paciente->Ocupacion_Actual = 'Ama de casa';
            $paciente->Procedencia = 'Oruro';
            $paciente->Residencia = 'Oruro';
            $paciente->Fuente_de_Informacion = 'TV';
            $paciente->email = 'ana@example.com';
            $paciente->Celular = 77234567;
            $paciente->Tipo_de_Sangre = 'A-';
            $paciente->Peso = 55.0;
            $paciente->Talla = 160.0;
            $paciente->Detalle = 'Detalles del paciente 4';
            $paciente->save();
    
            // Paciente 5
            $paciente = new Paciente();
            $paciente->CI = 5678901;
            $paciente->Nombres = 'Jorge';
            $paciente->Apellidos = 'García';
            $paciente->Sexo = 'M';
            $paciente->Edad = 28;
            $paciente->Estado_Civil = 'Soltero';
            $paciente->Grado_de_Instruccion = 'Universitario';
            $paciente->Ocupacion_Actual = 'Ingeniero';
            $paciente->Procedencia = 'Sucre';
            $paciente->Residencia = 'Sucre';
            $paciente->Fuente_de_Informacion = 'Internet';
            $paciente->email = 'jorge@example.com';
            $paciente->Celular = 78123456;
            $paciente->Tipo_de_Sangre = 'B+';
            $paciente->Peso = 70.0;
            $paciente->Talla = 175.0;
            $paciente->Detalle = 'Detalles del paciente 5';
            $paciente->save();
    
            // Paciente 6
            $paciente = new Paciente();
            $paciente->CI = 6789012;
            $paciente->Nombres = 'Laura';
            $paciente->Apellidos = 'Hernández';
            $paciente->Sexo = 'F';
            $paciente->Edad = 32;
            $paciente->Estado_Civil = 'Casada';
            $paciente->Grado_de_Instruccion = 'Secundaria';
            $paciente->Ocupacion_Actual = 'Ama de casa';
            $paciente->Procedencia = 'Tarija';
            $paciente->Residencia = 'Tarija';
            $paciente->Fuente_de_Informacion = 'Radio';
            $paciente->email = 'laura@example.com';
            $paciente->Celular = 79456789;
            $paciente->Tipo_de_Sangre = 'AB-';
            $paciente->Peso = 58.5;
            $paciente->Talla = 162.0;
            $paciente->Detalle = 'Detalles del paciente 6';
            $paciente->save();
    
            // Paciente 7
            $paciente = new Paciente();
            $paciente->CI = 7890123;
            $paciente->Nombres = 'Carlos';
            $paciente->Apellidos = 'Rojas';
            $paciente->Sexo = 'M';
            $paciente->Edad = 45;
            $paciente->Estado_Civil = 'Casado';
            $paciente->Grado_de_Instruccion = 'Universitario';
            $paciente->Ocupacion_Actual = 'Médico';
            $paciente->Procedencia = 'Potosí';
            $paciente->Residencia = 'Potosí';
            $paciente->Fuente_de_Informacion = 'Amigo';
            $paciente->email = 'carlos@example.com';
            $paciente->Celular = 70123456;
            $paciente->Tipo_de_Sangre = 'A-';
            $paciente->Peso = 68.0;
            $paciente->Talla = 170.0;
            $paciente->Detalle = 'Detalles del paciente 7';
            $paciente->save();
    
    

        // Repite este proceso para los otros pacientes
    }
}
