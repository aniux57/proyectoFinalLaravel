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


    public function detallepromo(string $id) {
        $promocion = Promocion::with('tipoPromocion')->find($id);
        return view(
            'portal/detallepromo',
            [
            'promocion' => $promocion
            ]
        );
    }
}
