<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $table = 'permiso';
    protected $fillable = [
        'roles_modulo',
        'roles_acciones',
        'admins_modulo',
        'admins_acciones',
        'admins_params',
        'departamentos_modulo',
        'departamentos_acciones',
        'municipios_modulo',
        'municipios_acciones',
        'sucursales_modulo',
        'sucursales_acciones',
        'categoria_modulo',
        'categoria_acciones',
        'laboratorios_modulo',
        'laboratorios_acciones',
        'productos_modulo',
        'productos_acciones',
        'clientes_modulo',
        'clientes_acciones',
        'tipos_promocion_modulo',
        'tipos_promocion_acciones',
        'promociones_modulo',
        'promociones_acciones',
        'reportes_modulo',
        'reportes_acciones'
    ];
}
