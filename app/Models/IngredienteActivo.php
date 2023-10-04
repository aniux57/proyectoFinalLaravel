<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredienteActivo extends Model
{
    use HasFactory;

    //atributos a llenar o acceder en la base de datos
    protected $fillable = ['nombre', 'descripcion', 'estado'];

    public function productosIngredientes(): HasMany
    {
        return $this -> hasMany(ProductoIngrediente::class);
    }
}
?>