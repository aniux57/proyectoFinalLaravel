<?php

namespace App\Http\Controllers\console\promociones;

use App\Http\Controllers\Controller;
use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionesController extends Controller
{

    public function index()
    {
        return view(
            'console/promociones/Promociones/list',
            ['promociones' => Promocion::all()]
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
