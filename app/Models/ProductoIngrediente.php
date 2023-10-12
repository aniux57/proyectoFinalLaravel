<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoIngrediente extends Model
{
    use HasFactory;

    protected $table = 'producto_ingrediente';

    public function categoria(): BelongsTo
    {
        return $this -> belongsTo(IngredienteActivo::class);
    }

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class);
    }
}
