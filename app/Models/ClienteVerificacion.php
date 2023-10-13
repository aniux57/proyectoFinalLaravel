<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClienteVerificacion extends Model
{
    use HasFactory;

    protected $table = 'cliente_verificacion';
    public $timestamps = false;
    protected $fillable = ['fecha_expiracion', 'codigo'];

    public function cliente(): BelongsTo
    {
        return $this -> belongsTo(Cliente::class);
    }
}
