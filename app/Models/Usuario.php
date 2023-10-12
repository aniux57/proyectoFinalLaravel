<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $fillable = ['email', 'password', 'estado'];

    public function administrador(): HasOne
    {
        return $this -> hasOne(Administrador::class);
    }

    public function cliente(): HasOne
    {
        return $this -> hasOne(Cliente::class);
    }

    public function rol(): BelongsTo
    {
        return $this -> belongsTo(Rol::class);
    }

    public function permiso(): HasOne
    {
        return $this -> hasOne(Permiso::class);
    }
}
