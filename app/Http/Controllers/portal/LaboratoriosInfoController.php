<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Laboratorio;
use App\Models\Producto;

class LaboratoriosInfoController extends Controller
{

    public function index(string $id) {
        $laboratorio = Laboratorio::find($id);
        $productos = Producto::where('id_laboratorio', $id)->get();
    
        return view(
            'portal/laboratorio',
            [
                'laboratorio' => $laboratorio,
                'productos' => $productos
            ]
        );
    }

    public function laboratorioslist() {
        return view(
            'portal/laboratorioslist',
            [
                'laboratorios' => Laboratorio::all()
            ]
        );
    }
}
