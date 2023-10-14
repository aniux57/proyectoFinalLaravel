<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{

    public function index()
    {
        return view(
            'console/sucursales/municipios/list',
            ['municipios' => Municipio::all()]
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
