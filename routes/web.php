<?php

use App\Http\Controllers\auth\SecurityController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/sucursales', [\App\Http\Controllers\portal\SucursalesInfoController::class, 'index']);
Route::get('/categoria/{id}', [\App\Http\Controllers\portal\CategoriasInfoController::class, 'index']);
Route::get('/categoriaslist', [\App\Http\Controllers\portal\CategoriasInfoController::class, 'categoriaslist']);
Route::get('/laboratorioslist', [\App\Http\Controllers\portal\LaboratoriosInfoController::class, 'laboratorioslist']);
Route::get('/laboratorio/{id}', [\App\Http\Controllers\portal\LaboratoriosInfoController::class, 'index']);
Route::get('/detalle/{id}', [\App\Http\Controllers\portal\CategoriasInfoController::class, 'detalle']);
Route::get('/promocioneslist', [\App\Http\Controllers\portal\PromocionesInfoController::class, 'promocioneslist']);
Route::get('/promo/{id}', [\App\Http\Controllers\portal\PromocionesInfoController::class, 'detalle']);

// Rutas de la Consola

Route::prefix('consola/')->group(function ()
{
    Route::resource('admins', AdminsController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('roles', RolesController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('clientes', ClientesController::class)
        -> middleware('auth')
        -> except(['create', 'store', 'edit', 'update']);
    Route::resource('categorias', CategoriasController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('laboratorios', LaboratoriosController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('productos', ProductosController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('promociones', PromocionesController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('tiposPromociones', TiposPromocionesController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('reportes', ReportesController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('departamentos', DepartamentosController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('municipios', MunicipiosController::class)
        -> middleware('auth')
        -> except(['show']);
    Route::resource('sucursales', SucursalesController::class)
        -> middleware('auth')
        -> except(['show']);
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

// Rutas Auth

Route::get('login', [SecurityController::class, 'login'])->name('login');
Route::post('authenticate', [SecurityController::class, 'authenticate']);
Route::get('register', [SecurityController::class, 'register'])->name('register');
Route::post('save', [SecurityController::class, 'save']);
Route::get('recovery', [SecurityController::class, 'recovery'])->name('recovery');
Route::post('send', [SecurityController::class, 'send']);
Route::get('logout', [SecurityController::class, 'logout'])-> middleware('auth');
