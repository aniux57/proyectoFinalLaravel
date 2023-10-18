<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Laboratorio;
use App\Models\Sucursal;

class SucursalesInfoController extends Controller
{

    public function index() {
        return view(
            'portal/sucursales',
            [
                'categorias' => Categoria::all(),
                'laboratorios' => Laboratorio::all(),
                'sucursales' => Sucursal::all()
            ]
        );
    }

}
