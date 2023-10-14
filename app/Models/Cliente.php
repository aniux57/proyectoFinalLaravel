<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    public $timestamps = false;
    protected $fillable = ['nombres', 'recibir_noticias', 'recibir_promociones', 'recibir_fav_categoria', 'recibir_fav_laboratorio', 'recibir_fav_producto', 'verificado', 'estado'];

    public function getEstado()
    {
        if ($this -> estado == 1) {
            return "Activo";
        } else {
            return "Inactivo";
        }
    }

    public function getRecibirNoticias()
    {
        if ($this -> recibir_noticias == 1) {
            return "SI";
        } else {
            return "NO";
        }
    }

    public function getRecibirPromociones()
    {
        if ($this -> recibir_promociones == 1) {
            return "SI";
        } else {
            return "NO";
        }
    }

    public function getRecibirFavCategoria()
    {
        if ($this -> recibir_fav_categoria == 1) {
            return "SI";
        } else {
            return "NO";
        }
    }

    public function getRecibirFavLaboratorio()
    {
        if ($this -> recibir_fav_laboratorio == 1) {
            return "SI";
        } else {
            return "NO";
        }
    }

    public function getRecibirFavProducto()
    {
        if ($this -> recibir_fav_producto == 1) {
            return "SI";
        } else {
            return "NO";
        }
    }

    public function getVerificado()
    {
        if ($this -> verificado == 1) {
            return "SI";
        } else {
            return "NO";
        }
    }

    public function clienteVerificaciones(): HasMany
    {
        return $this -> hasMany(ClienteVerificacion::class);
    }

    public function clienteFavoritos(): HasMany
    {
        return $this -> hasMany(ClienteFavorito::class);
    }
}
