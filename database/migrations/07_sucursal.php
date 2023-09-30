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
            $table->string('nombre');
            $table->string('direccion');
            $table->string('referencias');
            $table->string('telefonos');
            $table->string('whatsapp');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_municipio');

            $table->foreign('id_municipio')->references('id')->on('sucursal');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sucursal');
    }
};
?>
