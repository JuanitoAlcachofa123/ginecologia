<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->id('id_login');
            $table->string('email');
            $table->string('contraseña');
            $table->unsignedBigInteger('id_medico')->nullable();
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->unsignedBigInteger('ID_Paciente')->nullable();
            $table->foreign('ID_Paciente')->references('ID_Paciente')->on('pacientes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('login');
    }
}
