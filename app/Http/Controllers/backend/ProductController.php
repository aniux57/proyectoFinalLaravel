<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class ProductController extends Controller
{
   
    public function list(): JsonResponse
    {
        $products = Producto::select('id', 'nombre', 'fotografia')->get();
        return response()->json($products);
       
           
    }

    public function detail(Request $request): JsonResponse
    {
        $data = $request->json();
        if (($data -> has('id')))
        {
            $id = $data -> get('id');
            $producto = Producto::findOrFail($id);
            $detalle = [
                'codigo' => $producto->codigo,
                'especificaciones' => $producto->especificaciones,
                'precio_regular' => $producto->precio_regular,
            ];
            return response()->json($detalle);
    
        } else {
            return response() -> json([
            'successful' => false,
            'message' => 'No existe el producto'
            ], 200);
            }
    }
}
