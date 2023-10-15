<?php

namespace App\Http\Controllers\console\productos;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    public function index()
    {
        return view(
            'console/productos/Categorias/list',
            ['categorias' => Categoria::all()]
        );
    }

    public function create()
    {
        return view('console/productos/Categorias/create');
    }

    public function store(Request $request)
    {
        $categoria = new categoria();
        $categoria -> nombre = $request->input('nombre');
        $categoria -> descripcion = $request->input('descripcion');
        $categoria -> estado = true;
        $categoria -> save();

        return redirect()->route('categorias.index');
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
