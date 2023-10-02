<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoImagen extends Model
{
    use HasFactory;

    //atributos a llenar o acceder en la base de datos
    protected $fillable = ['imagen', 'estado'];

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class);
    }
}
?>
