<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategoriaProducto extends Model
{
    use HasFactory;

    protected $table = 'categoria_producto';
    public $timestamps = false;

    public function categoria(): BelongsTo
    {
        return $this -> belongsTo(Categoria::class, 'id_categoria');
    }

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class, 'id_producto');
    }
}
