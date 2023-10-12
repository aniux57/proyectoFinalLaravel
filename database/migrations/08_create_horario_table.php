<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->id();
            $table->string('dias', 50);
            $table->time('hora_apertura');
            $table->time('hora_cierre');
            $table->boolean('esta_cerrado');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_sucursal');

            $table->foreign('id_sucursal')->references('id')->on('sucursal');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('horario');
    }
};
