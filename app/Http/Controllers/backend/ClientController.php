<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ClientController extends Controller
{

    public function register(Request $request): JsonResponse
    {
        $data = $request -> json();

        if (($data -> has('nombres')) &&
            ($data -> has('recibir_noticias')) &&
            ($data -> has('recibir_promociones')) &&
            ($data -> has('recibir_fav_categoria')) &&
            ($data -> has('recibir_fav_laboratorio')) &&
            ($data -> has('recibir_fav_producto')) &&
            ($data -> has('correo')) &&
            ($data -> has('password')))
        {
            $correo =  $data -> get('correo');
            $usuario = Usuario::where('email', '=', $correo) -> first();

            if ($usuario == null) {
                $cliente = new Cliente();
                $cliente -> nombres = $data -> get('nombres');
                $cliente -> recibir_noticias = $data -> get('recibir_noticias');
                $cliente -> recibir_promociones = $data -> get('recibir_promociones');
                $cliente -> recibir_fav_categoria = $data -> get('recibir_fav_categoria');
                $cliente -> recibir_fav_laboratorio = $data -> get('recibir_fav_laboratorio');
                $cliente -> recibir_fav_producto = $data -> get('recibir_fav_producto');
                $cliente -> save();

                $usuario = new usuario();
                $usuario -> email = $correo;
                $usuario -> password = Crypt::encryptString($data -> get('password'));
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
        } else {
            return response() -> json([
                'successful' => false,
                'message' => 'La información para el registro del cliente se encuentra incompleta.'
            ], 200);
        }
    }
}
