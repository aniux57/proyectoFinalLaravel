<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sucursal extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'direccion', 'referencias', 'telefonos', 'whatsapp', 'estado'];

    public function sucursal(): BelongsTo
    {
        return $this -> belongsTo(Municipio::class);
    }
}
