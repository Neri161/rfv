<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mail\RecuperarMailable;
use Illuminate\Support\Facades\Mail;

class UsuarioController extends Controller
{
    public function bienvenida()
    {
        return view('bienvenida');
    }

    public function login()
    {
        return view('login');
    }

    public function registro()
    {
        return view('registro');
    }

    public function recuperar()
    {
        return view('recuperar');
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

    public function verificarCredenciales(Request $datos)
    {
        if (!$datos->correo || !$datos->password)
            return view("login", ["estatus" => "error", "mensaje" => "¡Completa los campos!"]);

        $usuario = Usuario::where('correo', $datos->correo)->first();

        if (!$usuario)
            return view("login", ["estatus" => "error", "mensaje" => "¡El correo no esta registrado!"]);

        if (!password_verify($datos->password, $usuario->password))
            return view("login", ["estatus" => "error", "mensaje" => "¡La contraseña que ingresaste es incorrecta!"]);

        Session::put('usuario', $usuario);

        if (isset($datos->url)) {
            $url = decrypt($datos->url);
            return redirect($url);
        } else {
            if($usuario->rol == "admin")
            return redirect()->route('admin.inicio');
        }
    }
    public function inicioadmin(){
        
    }

    public function recuperarContrasenia(Request $datos)
    {
        if (!$datos->correo)
            return view("recuperar", ["estatus" => "error", "mensaje" => "¡Completa los campos!"]);
        $usuario = Usuario::where('correo', $datos->correo)->first();
        if (!$usuario)
            return view("recuperar", ["estatus" => "error", "mensaje" => "¡El correo no esta registrado!"]);
        $max_num = 3;
        $codigo = "";
        for ($x = 0; $x < $max_num; $x++) {
            $num_aleatorio = rand(1, 100);
            $codigo = $codigo . strval($num_aleatorio);
        }
        $usuario->token_recovery = $codigo;
        $usuario->save();
        Mail::to($usuario->correo)->send(new RecuperarMailable($usuario));
        return view('codigo');
    }

    public function inicio()
    {
        return view('iniciouser');
    }

    public function cerrarSesion()
    {
        if (Session::has('usuario'))
            Session::forget('usuario');

        return redirect()->route('bienvenida');
    }

    public function codigo(Request $datos)
    {
        if (!$datos->codigo)
            return view("codigo", ["estatus" => "error", "mensaje" => "¡El ingresa el codigo!"]);

        $usuario = Usuario::where('token_recovery', $datos->codigo)->first();

        if (!$usuario)
            return view("codigo", ["estatus" => "error", "mensaje" => "¡Error en el codigo"]);

        return view("contrasenia", ["codigo" => $datos->codigo]);
    }

    public function cambio(Request $datos)
    {
        if (!$datos->pass1 || !$datos->pass2)
            return view("contrasenia", ["estatus" => "error", "mensaje" => "¡Completa los campos!"]);

        if ($datos->pass1 != $datos->pass2)
            return view("contrasenia", ["estatus" => "error", "mensaje" => "¡Las contraseñas no son iguales!"]);

        $usuario = Usuario::where('token_recovery', $datos->codigo)->first();
        $usuario->password = password_hash($datos->pass1, PASSWORD_DEFAULT, ['cost' => 5]);
        $usuario->token_recovery = null;
        $usuario->save();

        return redirect()->route('login');
    }
}
