<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;


class CreatePacientesTable extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('ID_Paciente');
            $table->integer('CI')->nullable();
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->char('Sexo', 1)->nullable();
            $table->integer('Edad');
            $table->string('Estado_Civil')->nullable();
            $table->string('Grado_de_Instruccion')->nullable();
            $table->string('Ocupacion_Actual')->nullable();
            $table->string('Procedencia');
            $table->string('Residencia')->nullable();
            $table->string('Fuente_de_Informacion')->nullable();
            $table->string('email')->unique();
            $table->string('Celular')->nullable(); // Nuevo campo: Celular
            $table->string('Tipo_de_Sangre')->nullable(); // Nuevo campo: Tipo de Sangre
            $table->float('Peso')->nullable(); // Nuevo campo: Peso
            $table->float('Talla')->nullable(); // Nuevo campo: Talla
            $table->text('Detalle')->nullable(); // Nuevo campo: Detalle
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}