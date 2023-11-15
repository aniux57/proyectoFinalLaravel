<?php

namespace App\Http\Controllers\console\administradores;

use App\Http\Controllers\Controller;
use App\Models\Administrador;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminsController extends Controller
{

    public function index()
    {
        return view(
            'console/administradores/admins/list',
            ['administradores' => Usuario::where('id_administrador', '!=', null)->get()]
        );
    }

    public function create()
    {
        return view('console/administradores/admins/create');
    }

    public function store(Request $request)
    {
        $administrador = new Administrador();
        $administrador -> nombre = $request -> input('nombre');
        $administrador -> save();

        $usuario = new Usuario();
        $usuario -> email = $request -> input('email');
        $usuario -> password = Crypt::encryptString($request -> input('password'));
        $usuario -> id_administrador = $administrador -> id;
        $usuario -> save();

        return redirect()->route('admins.index')
            ->with('message', 'Administrador creado exitosamente.')
            ->with('alert-class', 'alert-success');
    }

    public function edit(string $id)
    {
        $usuario = Usuario::find($id);

        if ($usuario != null) {
            return view(
                'console/administradores/admins/edit',
                ['usuario' => $usuario]
            );
        } else {
            return redirect() -> route('admins.index')
                ->with('message', 'El administrador que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }

    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);

        if ($usuario != null) {
            $admin = $usuario -> administrador;
            $admin -> nombre = $request -> input('nombre');
            $admin -> save();

            $usuario -> email = $request -> input('email');
            $usuario -> estado = $request -> input('estado');
            $usuario -> save();

            return redirect() -> route('admins.index')
                ->with('message', 'Administrador modificado exitosamente.')
                ->with('alert-class', 'alert-success');
        } else {
            return redirect() -> route('admins.index')
                ->with('message', 'El administrador que se desea editar no existe.')
                ->with('alert-class', 'alert-danger');
        }
    }
}
