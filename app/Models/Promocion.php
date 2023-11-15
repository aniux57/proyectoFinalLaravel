<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promocion extends Model
{
    use HasFactory;

    protected $table = 'promocion';
    public $timestamps = false;
    protected $fillable = ['indefinida', 'fecha_inicio', 'fecha_fin', 'fotografia', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function getIndefinida()
    {
        if ($this -> indefinida == 1) {
            return "Indefinida";
        } else {
            return "Por tiempo limitado";
        }
    }

    public function tipoPromocion(): BelongsTo
    {
        return $this -> belongsTo(TipoPromocion::class, 'id_tipo_promocion');
    }

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class, 'id_producto');
    }
}
