<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inicio(){

        return view('admin.inicioadmin');

    }
    public function registroUsuario(){
        $roles = Rol::all();
        return view('admin.registrarUsuario',['rol'=>$roles]);
    }

    public function usuario(){
        return json_encode(["estatus" => "success","mensaje" => "Hola Delfines"]);
    }

    /*public function comprobarUsuario()
    {
        $usuarios = Usuario::all();
        if($usuarios>0)
        {
            echo "<span class='estado-no-disponible-usuario'> Usuario no Disponible.</span>";
        }
        else
        {
            echo "<span class='estado-disponible-usuario'> Usuario Disponible.</span>";
        }

    }*/


    public function registroForm(Request $datos)
    {
        if (!$datos->correo || !$datos->pass1 || !$datos->pass2)
            return view("admin.registrarUsuario", ["estatus" => "error", "mensaje" => "¡Falta informaciónnn!"]);
        $usuario = Usuario::where('correo', $datos->correo)->first();

        if ($usuario)
            return view("admin.registrarUsuario", ["estatus" => "error", "mensaje" => "¡El correo ya se encuentra registrado!"]);


        if ($datos->pass1 != $datos->pass2)
            return view("admin.registrarUsuario", ["estatus" => "error", "mensaje" => "¡Las contraseñas no son iguales!"]);

        $usuario = new Usuario();
        $usuario->nombre = $datos->nombre;
        $usuario->paterno = $datos->paterno;
        $usuario->materno = $datos->materno;
        $usuario->usuario=$datos->usuario;
        $usuario->correo = $datos->correo;
        $usuario->password = password_hash($datos->pass1, PASSWORD_DEFAULT, ['cost' => 5]);
        $usuario->rol_id = $datos->rol;
        $usuario->save();
        $roles= Rol::all();

        return view("admin.registrarUsuario", ["estatus" => "success", "mensaje" => "¡Cuenta Creada!","rol"=>$roles]);
    }
}
