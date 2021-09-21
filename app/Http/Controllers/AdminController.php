<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inicio(){

        return view('admin.inicioadmin');

    }
    public function registroUsuario(){
        return view('admin.registrarUsuario');
    }
    public function registroForm(Request $datos)
    {
        if (!$datos->correo || !$datos->pass1 || !$datos->pass2)
            return view("registro", ["estatus" => "error", "mensaje" => "¡Falta información!"]);
        $usuario = Usuario::where('correo', $datos->correo)->first();
        if ($usuario)
            return view("registro", ["estatus" => "error", "mensaje" => "¡El correo ya se encuentra registrado!"]);

        if ($datos->pass1 != $datos->pass2)
            return view("registro", ["estatus" => "error", "mensaje" => "¡Las contraseñas no son iguales!"]);

        $usuario = new Usuario();
        $usuario->nombre = $datos->nombre;
        $usuario->paterno = $datos->paterno;
        $usuario->materno = $datos->materno;
        $usuario->correo = $datos->correo;
        $usuario->password = password_hash($datos->pass1, PASSWORD_DEFAULT, ['cost' => 5]);
        $usuario->save();

        return view("login", ["estatus" => "success", "mensaje" => "¡Cuenta Creada!"]);
    }
}