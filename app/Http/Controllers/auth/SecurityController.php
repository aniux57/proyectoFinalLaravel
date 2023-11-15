<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
class SecurityController extends Controller
{

    public function login()
    {
        if (!Auth::check()) {
            return view('auth/login');
        } else {
            $usuario = Auth::authenticate();
            if ($usuario -> administrador != null) {
                return redirect() -> route('categorias.index');
            } else if ($usuario -> cliente != null) {
                return redirect() -> route('home');
            }
        }
    }

    public function authenticate(Request $request)
    {
        if (($request -> has('hebreosEmail')) &&
            ($request -> has('hebreosPassword')))
        {
            $email = $request -> input('hebreosEmail');
            $password = $request -> input('hebreosPassword');

            $usuario = Usuario::where('email', '=', $email) -> first();

            if ($usuario != null) {
                $encrypted = Crypt::decryptString($usuario -> password);

                if ($encrypted == $password) {
                    Auth::login($usuario);

                    if ($usuario -> administrador != null) {
                        return redirect() -> route('categorias.index');
                    } else if ($usuario -> cliente != null) {
                        return redirect() -> route('home');
                    }
                }
            }

            return redirect() -> route('login')
                -> with('message', 'Credenciales ingresadas son incorrectas.')
                -> with('alert-class', 'alert-danger');
        } else {
            return redirect() -> route('login')
                -> with('message', 'Todos los datos son requeridos.')
                -> with('alert-class', 'alert-danger');
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function save()
    {

    }

    public function recovery()
    {
        return view('auth/recovery');
    }

    public function send()
    {

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect() -> route('home');
    }
}
