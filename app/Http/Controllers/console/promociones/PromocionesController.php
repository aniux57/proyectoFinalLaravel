<?php

namespace App\Http\Controllers\console\promociones;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Promocion;
use App\Models\TipoPromocion;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{

    public function index()
    {
        return view(
            'console/promociones/Promociones/list',
            ['promociones' => Promocion::all()]
        );
    }

    public function create()
    {
        return view(
            'console/promociones/Promociones/create',
            ['productos' => Producto::all()],
            ['tiposPromociones' => TipoPromocion::all()]
        );
    }

    public function store(Request $request)
    {
        $promocion = new Promocion();
        $promocion -> nombre = $request -> input('nombre');
        $promocion -> fecha_inicio = $request -> input('fecha_inicio');
        $promocion -> fecha_fin = $request -> input('fecha_fin');
        $promocion -> id_tipo_promocion = $request -> input('id_tipo_promocion');
        $promocion -> id_producto = $request -> input('id_producto');
        $promocion -> estado = true;
        $promocion -> save();

        return redirect() -> route('promociones.index');
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
