<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Promocion extends Model
{
    use HasFactory;

    protected $fillable = ['indefinida', 'fecha_inicio', 'fecha_fin', 'estado'];

    public function tipoPromocion(): BelongsTo
    {
        return $this -> belongsTo(TipoPromocion::class);
    }

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class);
    }
}
