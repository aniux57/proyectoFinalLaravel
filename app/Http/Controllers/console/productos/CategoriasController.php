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
        $categoria -> fotografia = $request->input('fotografia');
        $categoria -> save();

        return redirect() -> route('categorias.index')
            ->with('message', 'Categoria creada exitosamente.')
            ->with('alert-class', 'alert-success');
    }

    public function edit(string $id)
    {
        $categoria = Categoria::find($id);

        if ($categoria != null) {
            return view(
                'console/productos/Categorias/edit',
                ['categoria' => $categoria]
            );
        } else {
            return redirect() -> route('categorias.index')
                ->with('message', 'La categoria que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }

    public function update(Request $request, string $id)
    {
        $categoria = Categoria::find($id);

        if ($categoria != null) {

            $categoria -> nombre = $request->input('nombre');
            $categoria -> descripcion = $request->input('descripcion');
            $categoria -> fotografia = $request->input('fotografia');
            $categoria -> estado = $request -> input('estado');
            $categoria -> save();

            return redirect() -> route('categorias.index')
                ->with('message', 'Categoria modificada exitosamente.')
                ->with('alert-class', 'alert-success');
        } else {
            return redirect() -> route('categorias.index')
                ->with('message', 'La categoria que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }
}
