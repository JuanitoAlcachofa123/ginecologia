<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historial_medico', function (Blueprint $table) {
            $table->id();
            $table->string('Trabajo')->nullable();
            $table->string('Condiciones_de_Vivienda')->nullable();
            $table->string('Alimentacion')->nullable();
            $table->string('Frecuencia_de_Ejercicio')->nullable();
            $table->string('Habitos_Nocivos')->nullable();
            $table->string('Alergias_Reacciones_Adversas_Farmacologicas')->nullable();
            $table->string('Antecedentes_Medicos')->nullable();
            $table->string('Intervenciones_Quirurgicas_Accidentes')->nullable();
            $table->string('Antecedentes_Gineco_Obstetricos')->nullable();
            $table->string('Motivo_de_Consulta')->nullable();
            $table->string('Historia_de_la_Enfermedad_Actual')->nullable();
            $table->string('Funciones_Biologicas')->nullable();
            $table->string('Examen_Clinico_General')->nullable();
            $table->string('Examen_Clinico_Regional')->nullable();
            $table->string('Diagnostico')->nullable();
            $table->string('Plan_Terapeutico')->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedBigInteger('ID_Paciente');
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('historial_medico');
    }
};
