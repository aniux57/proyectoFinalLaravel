<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
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
        if (!Auth::check()) {
            return view('auth/register');
        } else {
            $usuario = Auth::authenticate();
            if ($usuario -> administrador != null) {
                return redirect() -> route('categorias.index');
            } else if ($usuario -> cliente != null) {
                return redirect() -> route('home');
            }
        }
    }

    public function save(Request $request)
    {
        $correo =  $request -> input('correo');
        $usuario = Usuario::where('email', '=', $correo) -> first();

        if ($usuario == null) {
            $cliente = new Cliente();
            $cliente -> nombres = $request -> input('nombres');
            $cliente -> recibir_noticias = $request -> input('recibir_noticias');
            $cliente -> recibir_promociones = $request -> input('recibir_promociones');
            $cliente -> recibir_fav_categoria = $request -> input('recibir_fav_categoria');
            $cliente -> recibir_fav_laboratorio = $request -> input('recibir_fav_laboratorio');
            $cliente -> recibir_fav_producto = $request -> input('recibir_fav_producto');
            $cliente -> save();

            $usuario = new usuario();
            $usuario -> email = $correo;
            $usuario -> password = Crypt::encryptString($request -> input('password'));
            $usuario -> id_cliente = $cliente -> id;
            $usuario -> save();

            return response() -> json([
                'successful' => true,
                'message' => 'Cliente creado exitosamente.'
            ], 200);
        } else {
            return response() -> json([
                'successful' => false,
                'message' => 'El correo que se desea utilizar ya se encuentra registrado en el sistema.'
            ], 200);
        }
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
