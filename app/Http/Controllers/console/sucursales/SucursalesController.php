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
                -> with('nombre', $request -> input('nombre'))
                -> with('direccion', $request -> input('direccion'))
                -> with('referencias', $request -> input('referencias'))
                -> with('telefonos', $request -> input('telefonos'))
                -> with('whatsapp', $request -> input('whatsapp'))
                -> with('latitud', $request -> input('latitud'))
                -> with('longitud', $request -> input('longitud'))
                -> with('message', 'Es requerido seleccionar un municipio')
                -> with('alert-class', 'alert-danger');
        }

        $sucursal = new sucursal();
        $sucursal -> nombre = $request -> input('nombre');
        $sucursal -> direccion = $request -> input('direccion');
        $sucursal -> referencias = $request -> input('referencias');
        $sucursal -> telefonos = $request -> input('telefonos');
        $sucursal -> whatsapp = $request -> input('whatsapp');
        $sucursal -> latitud = $request -> input('latitud');
        $sucursal -> longitud = $request -> input('longitud');
        $sucursal -> id_municipio = $municipio;
        $sucursal -> estado = true;
        $sucursal -> save();

        return redirect() -> route('sucursales.index')
            ->with('message', 'Sucursal creada exitosamente.')
            ->with('alert-class', 'alert-success');
    }

    public function edit(string $id)
    {
        $sucursal = Sucursal::find($id);

        if ($sucursal != null) {
            return view(
                'console/sucursales/sucursales/edit',
                [
                    'municipios' => Municipio::all(),
                    'sucursal' => $sucursal
                ]
            );
        } else {
            return redirect() -> route('sucursales.index')
                ->with('message', 'La sucursal que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }

    }

    public function update(Request $request, string $id)
    {
        $sucursal = Sucursal::find($id);

        if ($sucursal != null) {

            $sucursal -> nombre = $request -> input('nombre');
            $sucursal -> direccion = $request -> input('direccion');
            $sucursal -> referencias = $request -> input('referencias');
            $sucursal -> telefonos = $request -> input('telefonos');
            $sucursal -> whatsapp = $request -> input('whatsapp');
            $sucursal -> latitud = $request -> input('latitud');
            $sucursal -> longitud = $request -> input('longitud');
            $sucursal -> id_municipio = $request -> input('id_municipio');
            $sucursal -> estado = $request -> input('estado');
            $sucursal -> save();

            return redirect() -> route('sucursales.index')
                ->with('message', 'Sucursal modificada exitosamente.')
                ->with('alert-class', 'alert-success');
        } else {
            return redirect() -> route('sucursales.index')
                ->with('message', 'La sucursal que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }
}
