<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Laboratorio extends Model
{
    use HasFactory;

    protected $table = 'laboratorio';
    protected $fillable = ['nombre', 'descripcion', 'estado'];

    public function productos(): HasMany
    {
        return $this -> hasMany(Producto::class);
    }

    public function clienteFavoritos(): HasMany
    {
        return $this -> hasMany(ClienteFavorito::class);
    }
}
