<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesPersonalesNoPatologicosTable extends Migration
{
    public function up()
    {
        Schema::create('antecedentes_personales_no_patologicos', function (Blueprint $table) {
            $table->id('id_Antecedentes_Personales_No_Patologicos');
            $table->string('Trabajo')->nullable();
            $table->string('Condiciones_de_Vivienda')->nullable();
            $table->string('Alimentacion')->nullable();
            $table->string('Frecuencia_de_Ejercicio')->nullable();
            $table->string('Habitos_Nocivos')->nullable();
            $table->unsignedBigInteger('ID_Paciente');
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antecedentes_personales_no_patologicos');
    }
}
