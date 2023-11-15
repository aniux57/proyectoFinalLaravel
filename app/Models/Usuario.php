<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuario';
    public $timestamps = false;
    protected $fillable = ['email', 'password', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function administrador(): HasOne
    {
        return $this -> hasOne(Administrador::class, 'id','id_administrador');
    }

    public function cliente(): HasOne
    {
        return $this -> hasOne(Cliente::class, 'id', 'id_cliente');
    }

    public function rol(): BelongsTo
    {
        return $this -> belongsTo(Rol::class, 'id_rol');
    }

    public function permiso(): HasOne
    {
        return $this -> hasOne(Permiso::class, 'id', 'id_permiso');
    }
}
