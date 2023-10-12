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
            $table->boolean('recibir_noticias');
            $table->boolean('recibir_promociones');
            $table->boolean('recibir_fav_categoria');
            $table->boolean('recibir_fav_laboratorio');
            $table->boolean('recibir_fav_producto');
            $table->boolean('verificado');
            $table->boolean('estado');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
