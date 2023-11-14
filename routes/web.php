<?php

use App\Http\Controllers\backend\ClientController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\LaboratoryController;
use App\Http\Controllers\backend\CategoryController;
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

// Rutas del Portal

Route::get('/', [LandingPageController::class, 'index']);
Route::get('/sucursales', [\App\Http\Controllers\portal\SucursalesInfoController::class, 'index']);
Route::get('/categoria/{id}', [\App\Http\Controllers\portal\CategoriasInfoController::class, 'index']);
Route::get('/laboratorio/{id}', [\App\Http\Controllers\portal\LaboratoriosInfoController::class, 'index']);


// Rutas de la Consola

Route::prefix('consola/')->group(function ()
{
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
});

// Rutas del Backend

Route::prefix('backend/') -> group(function ()
{
    Route::post('register', [ClientController::class, 'register']);
    Route::get('products', [ProductController::class, 'list']);
    Route::get('product', [ProductController::class, 'detail']);
    Route::get('labs', [LaboratoryController::class, 'list']);
    Route::get('productsLab', [LaboratoryController::class, 'productsList']);
    Route::get('categories', [CategoryController::class, 'list']);
    Route::get('productsCat', [CategoryController::class, 'productsList']);

});
