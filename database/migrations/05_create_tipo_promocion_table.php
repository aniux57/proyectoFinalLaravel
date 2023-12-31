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
        Schema::create('tipo_promocion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion')->nullable();
            $table->Integer('unidades')->nullable();
            $table->Integer('descuento')->nullable();
            $table->boolean('estado')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_promocion');
    }
};
