<?php

namespace App\Http\Controllers\console\clientes;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        return view(
            'console/clientes/list',
            ['clientes' => Cliente::all()]
        );
    }

    public function show(string $id)
    {
        //
    }
}
