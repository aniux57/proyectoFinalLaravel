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
        $sucursal = new sucursal();
        $sucursal -> nombre = $request -> input('nombre');
        $sucursal -> direccion = $request -> input('direccion');
        $sucursal -> referencias = $request -> input('referencias');
        $sucursal -> telefonos = $request -> input('telefonos');
        $sucursal -> whatsapp = $request -> input('whatsapp');
        $sucursal -> id_municipio = $request -> input('id_municipio');
        $sucursal -> estado = true;
        $sucursal -> save();

        return redirect() -> route('sucursales.index');
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
