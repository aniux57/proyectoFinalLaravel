<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipio';
    protected $fillable = ['nombre', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function departamento(): BelongsTo
    {
        return $this -> belongsTo(Departamento::class, 'id_departamento');
    }

    public function sucursales(): HasMany
    {
        return $this -> hasMany(Sucursal::class);
    }
}
