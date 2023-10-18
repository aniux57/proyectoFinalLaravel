<?php

namespace App\Http\Controllers\portal;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index() {
        return view(
            'welcome',
            [
                'categorias' => Categoria::all(),
                'laboratorios' => Laboratorio::all()
            ]
        );
    }

}
