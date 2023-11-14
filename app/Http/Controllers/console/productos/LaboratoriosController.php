<?php

namespace App\Http\Controllers\console\productos;

use App\Http\Controllers\Controller;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratoriosController extends Controller
{

    public function index()
    {
        return view(
            'console/productos/Laboratorios/list',
            ['laboratorios' => Laboratorio::all()]
        );
    }

    public function create()
    {
        return view('console/productos/Laboratorios/create');
    }

    public function store(Request $request)
    {
        $laboratorio = new laboratorio();
        $laboratorio -> nombre = $request->input('nombre');
        $laboratorio -> descripcion = $request->input('descripcion');
        $laboratorio -> fotografia = $request->input('fotografia');
        $laboratorio -> save();

        return redirect() -> route('laboratorios.index')
            ->with('message', 'Laboratorio creado exitosamente.')
            ->with('alert-class', 'alert-success');
    }

    public function edit(string $id)
    {
        $laboratorio = Laboratorio::find($id);

        if ($laboratorio != null) {
            return view(
                'console/productos/Laboratorios/edit',
                ['laboratorio' => $laboratorio]
            );
        } else {
            return redirect() -> route('laboratorios.index')
                ->with('message', 'El laboratorio que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }

    public function update(Request $request, string $id)
    {
        $laboratorio = Laboratorio::find($id);

        if ($laboratorio != null) {
            $laboratorio -> nombre = $request->input('nombre');
            $laboratorio -> descripcion = $request->input('descripcion');
            $laboratorio -> fotografia = $request->input('fotografia');
            $laboratorio -> estado = $request -> input('estado');
            $laboratorio -> save();

            return redirect() -> route('laboratorios.index')
                ->with('message', 'Laboratorio modificado exitosamente.')
                ->with('alert-class', 'alert-success');
        } else {
            return redirect() -> route('laboratorios.index')
                ->with('message', 'El laboratorio que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }
}
