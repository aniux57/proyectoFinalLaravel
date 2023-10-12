<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClienteFavorito extends Model
{
    use HasFactory;

    protected $table = 'cliente_favorito';
    protected $fillable = ['estado'];

    public function cliente(): BelongsTo
    {
        return $this -> belongsTo(Cliente::class);
    }

    public function laboratorio(): BelongsTo
    {
        return $this -> belongsTo(Laboratorio::class);
    }

    public function producto(): BelongsTo
    {
        return $this -> belongsTo(Producto::class);
    }

    public function categoria(): BelongsTo
    {
        return $this -> belongsTo(Categoria::class);
    }
}

