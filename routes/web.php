<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\CatalogoController;

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
    return view('inicioSesion');
});

Route::view('/menuAdmin', 'menuAdmin')->name('menuAdmin');

Route::resource('usuarios', UsuarioController::class);      //rutas de los CRUD
Route::resource('productos', ProductoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('carritos', CarritoController::class);

Route::get('/registro', [RegistroController::class, 'mostrarFormulario'])->name('registro.mostrar'); //rutas del registro
Route::post('/registro', [RegistroController::class, 'registrar'])->name('registro.registrar');

Route::get('/inicio-sesion', [InicioSesionController::class, 'mostrarFormulario'])->name('inicioSesion.mostrar'); //rutas del inicio de sesion
Route::post('/inicio-sesion', [InicioSesionController::class, 'iniciarSesion'])->name('inicioSesion.iniciar');
Route::post('/cerrar-sesion', [InicioSesionController::class, 'cerrarSesion'])->name('cerrarSesion');

Route::get('/mostrar', [CatalogoController::class, 'mostrarProductos'])->name('catalogo.mostrar');  //ruta para el catalogo

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
