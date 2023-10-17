<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
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
        $departamento -> estado = true;
        $departamento -> save();

        return redirect()->route('departamentos.index')
            ->with('message', 'Departamento creada exitosamente.')
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
