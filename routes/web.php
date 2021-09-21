<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/bienvenida',[UsuarioController::class,'bienvenida'])->name('bienvenida');
Route::get('/login',[UsuarioController::class,'login'])->name('login');
Route::get('/registro',[UsuarioController::class,'registro'])->name('registro');
Route::post('/registroForm',[UsuarioController::class,'registroForm'])->name('registro.form');
Route::post('/verificarCredenciales',[UsuarioController::class,'verificarCredenciales'])->name('login.form');
Route::get('/cerrarSesion',[UsuarioController::class,'cerrarSesion'])->name('cerrar.sesion');
Route::get('/recuperar',[UsuarioController::class,'recuperar'])->name('correo');
Route::post('/recuperarContrasenia',[UsuarioController::class,'recuperarContrasenia'])->name('recuperar.contrasenia');
Route::post('/codigo',[UsuarioController::class,'codigo'])->name('contrasenia');
Route::post('/cambio/codigo',[UsuarioController::class,'cambio'])->name('cambio');

Route::prefix('/usuario')->middleware("VerificarUsuario")->group(function (){
    Route::get('/inicio',[UsuarioController::class,'inicio'])->name('usuario.inicio');
});
Route::prefix('/admin')->middleware("")->group(function (){
    Route::get('/inicio',[UsuarioController::class,'inicio'])->name('usuario.inicio');
});
