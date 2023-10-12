<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horario extends Model
{
    use HasFactory;

    protected $table = 'horario';
    protected $fillable = ['dias', 'hora_apertura', 'hora_cierre', 'esta_cerrado', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function sucursal(): BelongsTo
    {
        return $this -> belongsTo(Sucursal::class, 'id_sucursal');
    }
}
