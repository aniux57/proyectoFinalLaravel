<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoPromocion extends Model
{
    use HasFactory;

    protected $table = 'tipo_promocion';
    protected $fillable = ['nombre', 'descripcion', 'unidades', 'descuento', 'estado'];

    public function promociones(): HasMany
    {
        return $this -> hasMany(Promocion::class);
    }
}
