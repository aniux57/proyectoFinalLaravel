<?php

namespace App\Http\Controllers\console\administradores;

use App\Http\Controllers\Controller;
use App\Models\Administrador;
use Illuminate\Http\Request;

class AdminsController extends Controller
{

    public function index()
    {
        return view(
            'console/administradores/admins/list',
            ['administradores' => Administrador::all()]
        );
    }

    public function create()
    {
        return view('console/administradores/admins/create');
    }

    public function store(Request $request)
    {
        $administrador = new administrador();
        $administrador -> nombre = $request->input('nombre');
        $administrador -> save();

        return redirect()->route('admins.index');
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
