<?php

namespace App\Http\Controllers\console\sucursales;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
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
        return view(
            'console/sucursales/municipios/create',
            ['departamentos' => Departamento::all()]
        );
    }

    public function store(Request $request)
    {

        $municipio = new Municipio();
        $municipio -> nombre = $request -> input('nombre');
        $municipio -> id_departamento = $request -> input('id_departamento');
        $municipio -> estado = true;
        $municipio -> save();

        return redirect() -> route('municipios.index');
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
