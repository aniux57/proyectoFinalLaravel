<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class SucursalesController extends Controller
{

    public function index()
    {
        return view(
            'console/sucursales/sucursales/list',
            ['sucursales' => Sucursal::all()]
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
