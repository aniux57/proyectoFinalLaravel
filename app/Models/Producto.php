<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    public $timestamps = false;
    protected $fillable = ['codigo', 'nombre', 'fotografia', 'especificaciones', 'precio_regular', 'imagen', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function laboratorio(): BelongsTo
    {
        return $this -> belongsTo(Laboratorio::class, 'id_laboratorio');
    }

    public function categoriasProductos(): HasMany
    {
        return $this -> hasMany(CategoriaProducto::class);
    }

    public function productosImagenes(): HasMany
    {
        return $this-> hasMany(ProductoImagen::class);
    }

    public function productosIngredientes(): HasMany
    {
        return $this -> hasMany(ProductoIngrediente::class);
    }

    public function promociones(): HasMany
    {
        return $this -> hasMany(Promocion::class);
    }

    public function clienteFavoritos(): HasMany
    {
        return $this -> hasMany(ClienteFavorito::class);
    }
}
