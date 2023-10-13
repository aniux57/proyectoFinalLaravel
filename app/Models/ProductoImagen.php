<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoImagen extends Model
{
    use HasFactory;

    protected $table = 'producto_imagen';
    public $timestamps = false;
    protected $fillable = ['imagen', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class, 'id_producto');
    }
}
