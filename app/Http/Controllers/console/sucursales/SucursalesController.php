<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use App\Models\Municipio;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{

    public function index()
    {
        return view(
            'console/sucursales/sucursales/list',
            ['sucursales' => Sucursal::all()]
        );
    }

    public function create()
    {
        return view(
            'console/sucursales/sucursales/create',
            ['municipios' => Municipio::all()]
        );
    }

    public function store(Request $request)
    {
        $municipio = $request -> input('id_municipio');
        if ($municipio == -1) {
            return back()
                -> with('message', 'Es requerido seleccionar un municipio')
                -> with('alert-class', 'alert-danger');
        }

        $sucursal = new sucursal();
        $sucursal -> nombre = $request -> input('nombre');
        $sucursal -> direccion = $request -> input('direccion');
        $sucursal -> referencias = $request -> input('referencias');
        $sucursal -> telefonos = $request -> input('telefonos');
        $sucursal -> whatsapp = $request -> input('whatsapp');
        $sucursal -> id_municipio = $municipio;
        $sucursal -> estado = true;
        $sucursal -> save();

        return redirect() -> route('sucursales.index')
            ->with('message', 'Sucursal creada exitosamente.')
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
