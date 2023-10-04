<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoPromocion extends Model
{
    use HasFactory;

    //atributos a llenar o acceder en la base de datos
    protected $fillable = ['nombre', 'descripcion', 'unidades', 'descuento', 'estado'];

    public function promociones(): HasMany
    {
        return $this -> hasMany(Promocion::class);
    }
}
?>
