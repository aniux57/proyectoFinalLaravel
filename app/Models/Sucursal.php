<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sucursal extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'direccion', 'referencias', 'telefonos', 'whatsapp', 'estado'];

    public function municipio(): BelongsTo
    {
        return $this -> belongsTo(Municipio::class);
    }

    public function horarios(): HasMany
    {
        return $this -> hasMany(Horario::class);
    }
}
