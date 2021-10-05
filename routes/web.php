<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('bienvenida');
});

Route::get('/bienvenida', [UsuarioController::class, 'bienvenida'])->name('bienvenida');
Route::get('/login', [UsuarioController::class, 'login'])->name('login');
Route::get('/registro', [UsuarioController::class, 'registro'])->name('registro');
Route::post('/registroForm', [UsuarioController::class, 'registroForm'])->name('registro.form');
Route::post('/verificarCredenciales', [UsuarioController::class, 'verificarCredenciales'])->name('login.form');
Route::get('/cerrarSesion', [UsuarioController::class, 'cerrarSesion'])->name('cerrar.sesion');
Route::get('/recuperar', [UsuarioController::class, 'recuperar'])->name('correo');
Route::post('/recuperarContrasenia', [UsuarioController::class, 'recuperarContrasenia'])->name('recuperar.contrasenia');
Route::post('/codigo', [UsuarioController::class, 'codigo'])->name('contrasenia');
Route::post('/cambio/codigo', [UsuarioController::class, 'cambio'])->name('cambio');

Route::prefix('/usuario')->middleware("VerificarUsuario")->group(function () {
    Route::get('/inicio', [UsuarioController::class, 'inicio'])->name('usuario.inicio');
});
Route::prefix('/admin')->middleware("VerificarAdmin")->group(function () {
    Route::get('/inicio', [AdminController::class, 'inicio'])->name('admin.inicio');
    Route::get('/RegistrarUsuario', [AdminController::class, 'registroUsuario'])->name('admin.registrousuario');
    Route::get('/EditarUsuario', [AdminController::class, 'editarUsuario'])->name('admin.editarusuario');
    //Route::post('/registro',[AdminContoller::class,'registro'])->name('admin.registro');
    Route::post('/registroForm',[AdminController::class,'registroForm'])->name('registro.form');
    Route::patch('/editForm',[AdminController::class,'editForm'])->name('edit.form'); //ruta cambiar datos usuario
    Route::get('/usuario/{texto?}',[AdminController::class,'usuario'])->name('admin.usuario');

});
