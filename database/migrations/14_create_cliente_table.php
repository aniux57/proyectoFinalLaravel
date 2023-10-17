<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 100);
            $table->boolean('recibir_noticias')->default(false);
            $table->boolean('recibir_promociones')->default(false);
            $table->boolean('recibir_fav_categoria')->default(false);
            $table->boolean('recibir_fav_laboratorio')->default(false);
            $table->boolean('recibir_fav_producto')->default(false);
            $table->boolean('verificado')->default(false);
            $table->boolean('estado')->default(true);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
