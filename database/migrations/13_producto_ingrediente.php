<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('producto_ingrediente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ingrediente');
            $table->unsignedBigInteger('id_producto');

            $table->foreign('id_ingrediente')->references('id')->on('ingrediente_activo');
            $table->foreign('id_producto')->references('id')->on('producto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto_ingrediente');
    }
};
?>
