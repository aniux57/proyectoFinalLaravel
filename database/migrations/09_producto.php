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
            $table->string('codigo');
            $table->string('nombre');
            $table->multiLineString('especificaciones');
            $table->double('precio_regular');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_laboratorio');

            $table->foreign('id_laboratorio')->references('id')->on('laboratorio');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
?>
