<?php

namespace App\Http\Controllers\console\promociones;

use App\Http\Controllers\Controller;
use App\Models\TipoPromocion;
use Illuminate\Http\Request;

class TiposPromocionesController extends Controller
{

    public function index()
    {
        return view(
            'console/promociones/tiposPromociones/list',
            ['tipoPromociones' => TipoPromocion::all()]
        );
    }

    public function create()
    {
        return view('console/promociones/tiposPromociones/create');
    }

    public function store(Request $request)
    {
        $tipo_promocion = new tipoPromocion();
        $tipo_promocion -> nombre = $request->input('nombre');
        $tipo_promocion -> descripcion = $request->input('descripcion');
        $tipo_promocion -> unidades = $request->input('unidades');
        $tipo_promocion -> descuento = $request->input('descuento');
        $tipo_promocion -> estado = true;
        $tipo_promocion -> save();

        return redirect()->route('tiposPromociones.index');
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }
}
