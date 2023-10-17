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
        $unidades = $request->input('unidades');
        $descuento = $request->input('descuento');

        if ($unidades == null && $descuento == null) {
            return back()
                -> with('nombre', $request -> input('nombre'))
                -> with('descripcion', $request -> input('descripcion'))
                -> with('unidades', $unidades)
                -> with('descuento', $descuento)
                -> with('message', 'Se debe indicar las unidades o el descuento.')
                -> with('alert-class', 'alert-danger');
        }

        $tipo_promocion = new tipoPromocion();
        $tipo_promocion -> nombre = $request->input('nombre');
        $tipo_promocion -> descripcion = $request->input('descripcion');
        $tipo_promocion -> unidades = $request->input('unidades');
        $tipo_promocion -> descuento = $request->input('descuento');
        $tipo_promocion -> save();

        return redirect() -> route('tiposPromociones.index')
            ->with('message', 'Tipo de Promocion creada exitosamente.')
            ->with('alert-class', 'alert-success');

    }

    public function edit(string $id)
    {
        $tipo_promocion = TipoPromocion::find($id);

        if ($tipo_promocion != null) {
            return view(
                'console/promociones/tiposPromociones/edit',
                ['tipo_promocion' => $tipo_promocion]
            );
        } else {
            return redirect() -> route('tiposPromociones.index')
                ->with('message', 'El tipo de promoción que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }

    public function update(Request $request, string $id)
    {
        $tipo_promocion = TipoPromocion::find($id);

        if ($tipo_promocion != null) {

            $unidades = $request->input('unidades');
            $descuento = $request->input('descuento');

            if ($unidades == null && $descuento == null) {
                return back()
                    -> with('nombre', $request->input('nombre'))
                    -> with('descripcion', $request->input('descripcion'))
                    -> with('unidades', $unidades)
                    -> with('descuento', $descuento)
                    -> with('message', 'Se deben indicar las unidades o el descuento.')
                    -> with('alert-class', 'alert-danger');
            }

            $tipo_promocion -> nombre = $request->input('nombre');
            $tipo_promocion -> descripcion = $request->input('descripcion');
            $tipo_promocion -> unidades = $unidades;
            $tipo_promocion -> descuento = $descuento;
            $tipo_promocion -> estado = $request -> input('estado');
            $tipo_promocion -> save();

            return redirect() -> route('tiposPromociones.index')
                ->with('message', 'Tipo de promoción modificada exitosamente.')
                ->with('alert-class', 'alert-success');
        } else {
            return redirect() -> route('tiposPromociones.index')
                ->with('message', 'El tipo de promoción que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }
}
