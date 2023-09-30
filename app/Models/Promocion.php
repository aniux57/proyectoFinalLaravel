<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;

    protected $fillable = ['indefinida', 'fecha_inicio', 'fecha_fin', 'estado'];

    public function tipoPromocion(): HasMany
    {
        return $this -> hasMany(TipoPromocion::class);
    }
}
