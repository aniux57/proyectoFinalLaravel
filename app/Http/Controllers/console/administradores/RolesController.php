<?php

namespace App\Http\Controllers\console\administradores;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public function index()
    {
        return view(
            'console/administradores/roles/list',
            ['roles' => Rol::all()]
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
