<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredienteActivo extends Model
{
    use HasFactory;

    protected $table = 'ingrediente_activo';
    protected $fillable = ['nombre', 'descripcion', 'estado'];

    public function productosIngredientes(): HasMany
    {
        return $this -> hasMany(ProductoIngrediente::class);
    }
}
