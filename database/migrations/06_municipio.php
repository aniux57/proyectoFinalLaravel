<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_departamento');

            $table->foreign('id_departamento')->references('id')->on('departamento');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('municipio');
    }
};
?>
