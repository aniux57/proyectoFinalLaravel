<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('producto_imagen', function (Blueprint $table) {
            $table->id();
            $table->string('imagen');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_producto');

            $table->foreign('id_producto')->references('id')->on('producto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto_imagen');
    }
};
?>
