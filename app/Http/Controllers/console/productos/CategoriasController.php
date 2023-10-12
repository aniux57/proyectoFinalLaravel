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
        //
    }

    public function store(Request $request)
    {
        //
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
