<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permiso', function (Blueprint $table) {
            $table->id();
            $table->boolean('roles_modulo');
            $table->string('roles_acciones', 50);
            $table->boolean('admins_modulo');
            $table->string('admins_acciones', 50);
            $table->string('admins_params', 50);
            $table->boolean('departamentos_modulo');
            $table->string('departamentos_acciones', 50);
            $table->boolean('municipios_modulo');
            $table->string('municipios_acciones', 50);
            $table->boolean('sucursales_modulo');
            $table->string('sucursales_acciones', 50);
            $table->boolean('categoria_modulo');
            $table->string('categoria_acciones', 50);
            $table->boolean('laboratorios_modulo');
            $table->string('laboratorios_acciones', 50);
            $table->boolean('productos_modulo');
            $table->string('productos_acciones', 50);
            $table->boolean('clientes_modulo');
            $table->string('clientes_acciones', 50);
            $table->boolean('tipos_promocion_modulo');
            $table->string('tipos_promocion_acciones', 50);
            $table->boolean('promociones_modulo');
            $table->string('promociones_acciones', 50);
            $table->boolean('reportes_modulo');
            $table->string('reportes_acciones', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('permiso');
    }
};
