<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoPromocion extends Model
{
    use HasFactory;

    protected $table = 'tipo_promocion';
    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcion', 'unidades', 'descuento', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function promociones(): HasMany
    {
        return $this -> hasMany(Promocion::class);
    }
}
