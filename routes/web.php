<?php

use App\Http\Controllers\console\administradores\AdminsController;
use App\Http\Controllers\console\administradores\RolesController;
use App\Http\Controllers\console\clientes\ClientesController;
use App\Http\Controllers\console\productos\CategoriasController;
use App\Http\Controllers\console\productos\LaboratoriosController;
use App\Http\Controllers\console\productos\ProductosController;
use App\Http\Controllers\console\promociones\PromocionesController;
use App\Http\Controllers\console\promociones\TiposPromocionesController;
use App\Http\Controllers\console\reporteria\ReportesController;
use App\Http\Controllers\console\sucursales\DepartamentosController;
use App\Http\Controllers\console\sucursales\MunicipiosController;
use App\Http\Controllers\console\sucursales\SucursalesController;
use App\Http\Controllers\portal\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'index']);

// Rutas de la Consola

Route::resource('admins', AdminsController::class) -> except(['show']);
Route::resource('roles', RolesController::class) -> except(['show']);
Route::resource('clientes', ClientesController::class) -> except(['create', 'store', 'edit', 'update']);
Route::resource('categorias', CategoriasController::class) -> except(['show']);
Route::resource('laboratorios', LaboratoriosController::class) -> except(['show']);
Route::resource('productos', ProductosController::class) -> except(['show']);
Route::resource('promociones', PromocionesController::class) -> except(['show']);
Route::resource('tiposPromociones', TiposPromocionesController::class) -> except(['show']);
Route::resource('reportes', ReportesController::class) -> except(['show']);
Route::resource('departamentos', DepartamentosController::class) -> except(['show']);
Route::resource('municipios', MunicipiosController::class) -> except(['show']);
Route::resource('sucursales', SucursalesController::class) -> except(['show']);
