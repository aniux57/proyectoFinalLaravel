<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas de la Consola

Route::resource('admins', \App\Http\Controllers\console\administradores\AdminsController::class);
Route::resource('roles', \App\Http\Controllers\console\administradores\RolesController::class);
Route::resource('clientes', \App\Http\Controllers\console\clientes\ClientesController::class);
Route::resource('categorias', \App\Http\Controllers\console\productos\CategoriasController::class);
Route::resource('laboratorios', \App\Http\Controllers\console\productos\LaboratoriosController::class);
Route::resource('productos', \App\Http\Controllers\console\productos\ProductosController::class);
Route::resource('promociones', \App\Http\Controllers\console\promociones\PromocionesController::class);
Route::resource('tiposPromociones', \App\Http\Controllers\console\promociones\TiposPromocionesController::class);
Route::resource('reportes', \App\Http\Controllers\console\reporteria\ReportesController::class);
Route::resource('departamentos', \App\Http\Controllers\console\sucursales\DepartamentosController::class);
Route::resource('municipios', \App\Http\Controllers\console\sucursales\MunicipiosController::class);
Route::resource('sucursales', \App\Http\Controllers\console\sucursales\SucursalesController::class);
