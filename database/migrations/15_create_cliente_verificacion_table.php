<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cliente_verificacion', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_expiracion');
            $table->time('hora_expiracion');
            $table->string('code', 60);
            $table->unsignedBigInteger('id_cliente');

            $table->foreign('id_cliente')->references('id')->on('cliente');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente_verificacion');
    }
};
