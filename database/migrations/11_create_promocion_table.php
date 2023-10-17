<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('promocion', function (Blueprint $table) {
            $table->id();
            $table->boolean('indefinida');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->boolean('estado')->default(true);
            $table->unsignedBigInteger('id_tipo_promocion');
            $table->unsignedBigInteger('id_producto');

            $table->foreign('id_tipo_promocion')->references('id')->on('tipo_promocion');
            $table->foreign('id_producto')->references('id')->on('producto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('promocion');
    }
};
