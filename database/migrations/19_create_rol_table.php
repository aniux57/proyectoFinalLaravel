<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->boolean('estado');
            $table->unsignedBigInteger('id_permiso');

            $table->foreign('id_permiso')->references('id')->on('permiso');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rol');
    }
};
