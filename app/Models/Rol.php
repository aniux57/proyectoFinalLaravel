<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';
    protected $fillable = ['nombre', 'estado'];

    public function permiso(): HasOne
    {
        return $this -> hasOne(Permiso::class);
    }

    public function usuarios(): HasMany
    {
        return $this -> hasMany(Usuario::class);
    }
}
