<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_evento');
            $table->date('fecha_inicio');
            $table->string('descripción');
            $table->bigInteger('colaborador_id')->references('id')->on('colaboradores')->nullable();
            $table->bigInteger('patrocinador_id')->references('id')->on('patrocinadores')->nullable();
            $table->bigInteger('usuario_id')->references('id')->on('users')->nullable();
            $table->bigInteger('imagen_id')->references('id')->on('galeria')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
