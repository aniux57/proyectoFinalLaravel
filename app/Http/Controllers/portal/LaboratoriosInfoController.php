<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Laboratorio;
use App\Models\Producto;

class LaboratoriosInfoController extends Controller
{

    public function index(string $id) {
        return view(
            'portal/laboratorio',
            [
                'categorias' => Categoria::all(),
                'laboratorios' => Laboratorio::all(),
                'laboratorio' => Laboratorio::find($id),
                'productos' => Producto::where('id_laboratorio', $id)->get()
            ]
        );
    }
}
