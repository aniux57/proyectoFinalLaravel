<?php

namespace App\Http\Controllers\console\reporteria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportesController extends Controller
{

    public function index()
    {
        return view('console/reporteria/reporteria');
    }
}
