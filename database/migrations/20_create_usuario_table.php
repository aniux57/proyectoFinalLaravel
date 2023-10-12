<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('email', 60);
            $table->string('password', 75);
            $table->boolean('estado');
            $table->unsignedBigInteger('id_administrador');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_permiso');

            $table->foreign('id_administrador')->references('id')->on('administrador');
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_rol')->references('id')->on('rol');
            $table->foreign('id_permiso')->references('id')->on('permiso');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
