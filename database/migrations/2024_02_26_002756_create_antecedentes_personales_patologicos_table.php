<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntecedentesPersonalesPatologicosTable extends Migration
{
    public function up()
    {
        Schema::create('antecedentes_personales_patologicos', function (Blueprint $table) {
            $table->id('id_Antecedentes_Personales_Patologicos');
            $table->string('Alergias_Reacciones_Adversas_Farmacologicas')->nullable();
            $table->string('Antecedentes_Medicos')->nullable();
            $table->string('Intervenciones_Quirurgicas_Accidentes')->nullable();
            $table->unsignedBigInteger('ID_Paciente');
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antecedentes_personales_patologicos');
    }
}
