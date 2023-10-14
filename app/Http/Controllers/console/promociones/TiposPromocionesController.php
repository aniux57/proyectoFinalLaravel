<?php

namespace App\Http\Controllers\console\promociones;

use App\Http\Controllers\Controller;
use App\Models\TipoPromocion;
use Illuminate\Http\Request;

class TiposPromocionesController extends Controller
{

    public function index()
    {
        return view(
            'console/promociones/tiposPromociones/list',
            ['tipoPromociones' => TipoPromocion::all()]
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
