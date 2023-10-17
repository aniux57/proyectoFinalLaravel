<?php

namespace App\Http\Controllers\console\productos;

use App\Http\Controllers\Controller;
use App\Models\Laboratorio;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index()
    {
        return view(
            'console/productos/Productos/list',
            ['productos' => Producto::all()]
        );
    }

    public function create()
    {
        return view(
            'console/productos/Productos/create',
            ['laboratorios' => Laboratorio::all()]
        );
    }

    public function store(Request $request)
    {
        $laboratorio = $request -> input('id_laboratorio');
        if ($laboratorio == -1) {
            return back()
                -> with('codigo', $request -> input('codigo'))
                -> with('nombre', $request -> input('nombre'))
                -> with('especificaciones', $request -> input('especificaciones'))
                -> with('precio_regular', $request -> input('precio_regular'))
                -> with('id_laboratorio', $request -> input('id_laboratorio'))
                -> with('message', 'Es requerido seleccionar un laboratorio')
                -> with('alert-class', 'alert-danger');
        }

        $producto = new producto();
        $producto -> codigo = $request -> input('codigo');
        $producto -> nombre = $request -> input('nombre');
        $producto -> especificaciones = $request -> input('especificaciones');
        $producto -> precio_regular = $request -> input('precio_regular');
        $producto -> id_laboratorio = $laboratorio;
        $producto -> save();

        return redirect() -> route('productos.index')
            ->with('message', 'Producto creado exitosamente.')
            ->with('alert-class', 'alert-success');
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
