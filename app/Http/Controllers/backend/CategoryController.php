<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\CategoriaProducto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
   
    public function list(): JsonResponse
    {
        $categorias = Categoria::select('id', 'nombre', 'descripcion', 'fotografia')->get();
        return response()->json($categorias);
           
    }

    public function productsList(Request $request): JsonResponse
    {
        $data = $request->json();
        if (($data -> has('id')))
        {
            $idCategoria = $data -> get('id');
            $productosIds = CategoriaProducto::where('id_categoria', $idCategoria)
            ->pluck('id_producto');

        $productos = Producto::whereIn('id', $productosIds)
            ->select('id', 'nombre', 'fotografia')
            ->get();
            
            return response()->json($productos);
    
        } else {
            return response() -> json([
            'successful' => false,
            'message' => 'No existe la categoria'
            ], 200);
            }
    }
}
