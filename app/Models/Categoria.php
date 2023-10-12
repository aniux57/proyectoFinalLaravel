<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $fillable = ['nombre', 'descripcion', 'estado'];

    public function categoriasProductos(): HasMany
    {
        return $this -> hasMany(CategoriaProducto::class);
    }

    public function clienteFavoritos(): HasMany
    {
        return $this -> hasMany(ClienteFavorito::class);
    }
}
