<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Laboratorio;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class LaboratoryController extends Controller
{
   
    public function list(): JsonResponse
    {
        $laboratorios = Laboratorio::select('id', 'nombre', 'descripcion', 'fotografia')->get();
        return response()->json($laboratorios);
           
    }

    public function productsList(Request $request): JsonResponse
    {
        $data = $request->json();
        if (($data -> has('id')))
        {
            $idlaboratorio = $data -> get('id');
            $laboratorio = Laboratorio::findOrFail($idlaboratorio);
            $productos = Producto::where('id_laboratorio', $idlaboratorio)
            ->select('id', 'nombre', 'fotografia')
            ->get();
            
            return response()->json($productos);
    
        } else {
            return response() -> json([
            'successful' => false,
            'message' => 'No existe el laboratorio'
            ], 200);
            }
    }
}
