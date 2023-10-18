<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Laboratorio;
use App\Models\Producto;

class CategoriasInfoController extends Controller
{

    public function index(string $id) {
        return view(
            'portal/categoria',
            [
                'categorias' => Categoria::all(),
                'laboratorios' => Laboratorio::all(),
                'categoria' => Categoria::find($id),
                'productos' => Producto::all()
            ]
        );
    }
}
