<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Laboratorio;
use App\Models\Producto;
use App\Models\Promocion;
use App\Models\TipoPromocion;

class PromocionesInfoController extends Controller
{

    public function promocioneslist() {
        $promociones = Promocion::with('tipoPromocion')->get();
        $tipoPromociones = TipoPromocion::all();
        return view(
            'portal/promocioneslist',

            [
                'promociones' => Promocion::all(),
                'tipopromociones' => TipoPromocion::all()
            ]
        );
    }


    public function promo(string $id) {
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

    public function detalle(string $id) {
        $producto = Producto::find($id);
        $ingredienteId = ProductoIngrediente::where('id_producto', $id)->pluck('id_ingrediente');
        $ingredientes = IngredienteActivo::whereIn('id', $ingredienteId)->get();

        return view(
            'portal/detalle',
            [
                'categorias' => Categoria::all(),
                'laboratorios' => Laboratorio::all(),
                'producto' => $producto,
                'ingredientes' => $ingredientes
            ]
        );
    }
}
