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
    Route::get('/Perfil',[UsuarioController::class, 'datosUsuario'])->name('usuario.datosusuario');//vista
    Route::get('/EditarUsuario', [UsuarioController::class, 'editarUsuario'])->name('usuario.editarusuario');//vista
    Route::patch('/editForm',[UsuarioController::class,'editUsuario'])->name('edit.forms'); //controlador
    Route::get('/usuario/{texto?}',[UsuarioController::class,'usuario'])->name('usuario.usuario');
});
Route::prefix('/admin')->middleware("VerificarAdmin")->group(function () {
    Route::get('/inicio', [AdminController::class, 'inicio'])->name('admin.inicio');
    Route::get('/RegistrarUsuario', [AdminController::class, 'vistaRegistroUsuario'])->name('admin.registrousuario');
    Route::post('/RegistrarCursoForm', [AdminController::class, 'curso'])->name('curso.form');
    Route::post('/registroForm',[AdminController::class,'registroUsuario'])->name('registro.form');
    Route::get('/registroFormPrueba',[AdminController::class,'PruebaregistroUsuario'])->name('registro.form');
    Route::post('/updateForm',[AdminController::class,'actualizarUsuario'])->name('editar.form');
    Route::get('/EditarUsuario/{id?}',[AdminController::class,'vistaEditarUsuario'])->name('editar.usuario');
    Route::post('/RegistroFormG',[AdminController::class,'gerenciaForm'])->name('gerencia.form');
    Route::get('/usuario/{texto?}',[AdminController::class,'usuario'])->name('admin.usuario');
    Route::get('/usuario2/{texto?}',[AdminController::class,'usuario2'])->name('admin.usuario2');
    Route::get('/Perfil',[AdminController::class, 'datosUsuario'])->name('admin.datosusuario');
    Route::get('/RegistrarGerencia',[AdminController::class,'vistaRegistrarGerencia'])->name('admin.gerencia');
    Route::get('/RegistrarCurso',[AdminController::class,'vistaRegistrarCurso'])->name('admin.curso');
    Route::get('/listaGerencias',[AdminController::class,'listaGerencias'])->name('admin.listagerencias');
    Route::get('/EditarUsuario', [AdminController::class, 'editarUsuario'])->name('admin.editarusuario');
    Route::patch('/editForm',[AdminController::class,'editForm'])->name('edit.form'); //ruta cambiar datos usuario
    Route::get('/ListaUsuariosActivos',[AdminController::class,'listaUsuario'])->name('list.user');
    Route::get('/ElminarUsuario/{id?}',[AdminController::class,'eliminarUsuario'])->name('eliminarUsuario');
    Route::get('/ActivarUsuario/{id?}',[AdminController::class,'activarUsuario'])->name('activarUsuario');
    Route::get('/videos',[AdminController::class,'videos'])->name('admin.Mostrarvideos');
    Route::get('/video/{id?}',[AdminController::class,'video'])->name('admin.video');
});
