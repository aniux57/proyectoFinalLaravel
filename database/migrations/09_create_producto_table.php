<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 20);
            $table->string('nombre', 100);
            $table->string('fotografia',100);
            $table->longText('especificaciones');
            $table->unsignedDouble('precio_regular');
            $table->boolean('estado')->default(true);
            $table->unsignedBigInteger('id_laboratorio');

            $table->foreign('id_laboratorio')->references('id')->on('laboratorio');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
