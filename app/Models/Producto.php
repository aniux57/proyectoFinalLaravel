<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    //atributos a llenar o acceder en la base de datos
    protected $fillable = ['codigo', 'nombre', 'especificaciones', 'precio_regular', 'estado'];

    public function laboratorio(): BelongsTo
    {
        return $this -> belongsTo(Laboratorio::class);
    }

    public function categoriasProductos(): HasMany
    {
        return $this -> hasMany(CategoriaProducto::class);
    }
}
