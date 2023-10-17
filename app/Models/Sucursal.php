<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursal';
    public $timestamps = false;
    protected $fillable = ['nombre', 'direccion', 'referencias', 'telefonos', 'whatsapp', 'latitud', 'longitud', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function municipio(): BelongsTo
    {
        return $this -> belongsTo(Municipio::class, 'id_municipio');
    }

    public function horarios(): HasMany
    {
        return $this -> hasMany(Horario::class);
    }
}
