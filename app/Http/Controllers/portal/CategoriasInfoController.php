<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Laboratorio;
use App\Models\CategoriaProducto;
use App\Models\Producto;

class CategoriasInfoController extends Controller
{

    public function categoriaslist() {
        return view(
            'portal/categoriaslist',
            [
                'categorias' => Categoria::all()
            ]
        );
    }


    public function index(string $id) {
        $categoria = Categoria::find($id);
        $productosIds = CategoriaProducto::where('id_categoria', $id)->pluck('id_producto');
        $productos = Producto::whereIn('id', $productosIds)->get();
    
        return view(
            'portal/categoria',
            [
                'categorias' => Categoria::all(),
                'laboratorios' => Laboratorio::all(),
                'categoria' => $categoria,
                'productos' => $productos
            ]
        );
    }
}
