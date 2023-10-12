<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sucursal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('direccion', 100);
            $table->string('referencias');
            $table->string('telefonos', 40);
            $table->string('whatsapp', 15);
            $table->boolean('estado');
            $table->unsignedBigInteger('id_municipio');

            $table->foreign('id_municipio')->references('id')->on('municipio');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sucursal');
    }
};
