<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{

    public function index()
    {
        return view(
            'console/sucursales/municipios/list',
            ['municipios' => Municipio::all()]
        );
    }

    public function create()
    {
        return view(
            'console/sucursales/municipios/create',
            ['departamentos' => Departamento::all()]
        );
    }

    public function store(Request $request)
    {
        $departamento = $request -> input('id_departamento');
        if ($departamento == -1) {
            return back()
                -> with('nombre', $request -> input('nombre'))
                -> with('message', 'Es requerido seleccionar un departamento')
                -> with('alert-class', 'alert-danger');
        }

        $municipio = new Municipio();
        $municipio -> nombre = $request -> input('nombre');
        $municipio -> id_departamento = $request -> input('id_departamento');
        $municipio -> save();

        return redirect() -> route('municipios.index')
            ->with('message', 'Municipio creada exitosamente.')
            ->with('alert-class', 'alert-success');
    }

    public function edit(string $id)
    {
        $municipio = Municipio::find($id);

        if ($municipio != null) {
            return view(
                'console/sucursales/municipios/edit',
                [
                    'departamentos' => Departamento::all(),
                    'municipio' => $municipio
                ]
            );
        } else {
            return redirect() -> route('municipios.index')
                ->with('message', 'El municipio que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }

    public function update(Request $request, string $id)
    {
        $municipio = Municipio::find($id);

        if ($municipio != null) {

            $municipio -> nombre = $request -> input('nombre');
            $municipio -> id_departamento = $request -> input('id_departamento');
            $municipio -> estado = $request -> input('estado');
            $municipio -> save();

            return redirect() -> route('municipios.index')
                ->with('message', 'Municipio modificado exitosamente.')
                ->with('alert-class', 'alert-success');
        } else {
            return redirect() -> route('municipios.index')
                ->with('message', 'El municipio que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }
}
