<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{

    public function index()
    {
        return view(
            'console/sucursales/departamentos/list',
            ['departamentos' => Departamento::all()]
        );
    }

    public function create()
    {
        return view('console/sucursales/departamentos/create');
    }

    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento -> nombre = $request->input('nombre');
        $departamento -> save();

        return redirect()->route('departamentos.index')
            ->with('message', 'Departamento creada exitosamente.')
            ->with('alert-class', 'alert-success');
    }

    public function edit(string $id)
    {
        $departamento = Departamento::find($id);

        if ($departamento != null) {
            return view(
                'console/sucursales/departamentos/edit',
                ['departamento' => $departamento]
            );
        } else {
            return redirect() -> route('departamentos.index')
                ->with('message', 'El departamento que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }

    public function update(Request $request, string $id)
    {
        $departamento = Departamento::find($id);

        if ($departamento != null) {

            $departamento -> nombre = $request -> input('nombre');
            $departamento -> estado = $request -> input('estado');
            $departamento -> save();

            return redirect() -> route('departamentos.index')
                ->with('message', 'Departamento modificado exitosamente.')
                ->with('alert-class', 'alert-success');
        } else {
            return redirect() -> route('departamentos.index')
                ->with('message', 'La departamento que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }
}
