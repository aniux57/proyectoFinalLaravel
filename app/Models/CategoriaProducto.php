<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoriaProducto extends Model
{
    use HasFactory;

    public function categoria(): BelongsTo
    {
        return $this -> belongsTo(Categoria::class);
    }

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class);
    }
}
