<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $fillable = ['nombres', 'recibir_noticias', 'recibir_promociones', 'recibir_fav_categoria', 'recibir_fav_laboratorio', 'recibir_fav_producto', 'verificado', 'estado'];

    public function clienteVerificaciones(): HasMany
    {
        return $this -> hasMany(ClienteVerificacion::class);
    }

    public function clienteFavoritos(): HasMany
    {
        return $this -> hasMany(ClienteFavorito::class);
    }
}
