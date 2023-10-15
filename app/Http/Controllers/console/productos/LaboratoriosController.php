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
        $laboratorio -> estado = true;
        $laboratorio -> save();

        return redirect()->route('laboratorios.index');
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
