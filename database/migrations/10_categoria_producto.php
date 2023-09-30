<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categoria_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_producto');

            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->foreign('id_producto')->references('id')->on('producto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categoria_producto');
    }
};
?>
