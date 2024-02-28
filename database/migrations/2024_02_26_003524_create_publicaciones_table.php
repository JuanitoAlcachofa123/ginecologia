<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id('id_publicacion');
            $table->string('descripcion', 200);
            $table->date('fecha');
            $table->time('hora');
            $table->binary('multimedia')->nullable();
            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id_medico')->on('medico');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
}
