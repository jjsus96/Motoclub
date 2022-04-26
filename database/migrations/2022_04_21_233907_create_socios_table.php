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
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('usuario_id')->references('id')->on('users');
            $table->string('nombre_socio');
            $table->string('apellidos');
            $table->string('fecha_nacimiento');
            $table->string('direccion');
            $table->string('padrino');
            $table->string('motocicleta');
            $table->string('foto_carnet');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socios');
    }
};
