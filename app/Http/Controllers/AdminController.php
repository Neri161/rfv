<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use App\Models\Gerencia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inicio()
    {
        return view('admin.inicioadmin');
    }

    public function registroUsuario()
    {
        $roles = Rol::all();
        $gerencias = Gerencia::all();
        return view('admin.registrarUsuario', ['rol' => $roles, "gerencia" => $gerencias]);
    }

    public function datosUsuario()
    {
        $usuario = Usuario::all();
        return view('admin.datosUsuario', ['usuario' => $usuario]);
    }

    public function editarUsuario()
    {
        $roles = Rol::all();
        return view('admin.editarUsuario', ['rol' => $roles]);
    }

    public function usuario($texto)
    {
        $usuario = Usuario::where("usuario", $texto)->first();
        if (!$usuario)
            return json_encode(["estatus" => "success", "mensaje" => "No existe"]);
        else
            return json_encode(["estatus" => "error", "mensaje" => "Si existe"]);

    }
    public function usuario2($texto)
    {
        $usuario = Usuario::where("usuario", $texto)->first();
        if (!$usuario) {
            return json_encode(["estatus" => "success", "mensaje" => "No existe"]);
        }
        else {
            if ($usuario->id == session('usuario')->id) {
                return json_encode(["estatus" => "success", "mensaje" => "No existe"]);
            }
            else {
                return json_encode(["estatus" => "error", "mensaje" => "Si existe"]);
            }
        }
    }

    public function listaGerencias()
    {
        $gerencia = Gerencia::all();
        return view('admin.listaGerencias', ['gerencia' => $gerencia]);
    }

    public function registroForm(Request $datos)
    {
        $roles = Rol::all();
        $gerencias = Gerencia::all();
        $usuario = Usuario::where("usuario", $datos->usuario)->first();
        if (!$usuario)
            return view("admin.registrarUsuario", ["estatus" => "error", "mensaje" => "¡El usuario existe!", "rol" => $roles, "gerencia" => $gerencias]);

        if (!$datos->correo || !$datos->pass1 || !$datos->pass2)
            return view("admin.registrarUsuario", ["estatus" => "error", "mensaje" => "¡Falta informaciónnn!", "rol" => $roles, "gerencia" => $gerencias]);
        $usuario = Usuario::where('correo', $datos->correo)->first();

        if ($usuario)
            return view("admin.registrarUsuario", ["estatus" => "error", "mensaje" => "¡El correo ya se encuentra registrado!", "rol" => $roles, "gerencia" => $gerencias]);


        if ($datos->pass1 != $datos->pass2)
            return view("admin.registrarUsuario", ["estatus" => "error", "mensaje" => "¡Las contraseñas no son iguales!", "rol" => $roles, "gerencia" => $gerencias]);

        $usuario = new Usuario();
        $usuario->nombre = $datos->nombre;
        $usuario->paterno = $datos->paterno;
        $usuario->materno = $datos->materno;
        $usuario->usuario = $datos->usuario;
        $usuario->correo = $datos->correo;
        $usuario->password = password_hash($datos->pass1, PASSWORD_DEFAULT, ['cost' => 5]);
        $usuario->rol_id = $datos->rol;
        $usuario->gerencia_id = $datos->gerencia;
        $usuario->estatus = "activo";
        $usuario->foto = "/img/undraw_profile.svg";
        $usuario->save();
        return view("admin.registrarUsuario", ["estatus" => "success", "mensaje" => "¡Cuenta Creada!", "rol" => $roles, "gerencia" => $gerencias]);
    }

    //actulizar datos de usuario
    public function editForm(Request $datos)
    {
        if (!$datos->correo || !$datos->pass1 || !$datos->pass2)
            return view("admin.editarUsuario", ["estatus" => "error", "mensaje" => "¡Falta informaciónnn!"]);
        $usuario = Usuario::where('correo', $datos->correo)->first();
        if ($usuario)
            return view("admin.editarUsuario", ["estatus" => "error", "mensaje" => "¡El correo ya se encuentra registrado!"]);
        if ($datos->pass1 != $datos->pass2)
            return view("admin.editarUsuario", ["estatus" => "error", "mensaje" => "¡Las contraseñas no son iguales!"]);

        $usuario = Usuario::where('id', session('usuario')->id)->first();
        $usuario->usuario = $datos->usuario;
        $usuario->correo = $datos->correo;
        $usuario->password = password_hash($datos->pass1, PASSWORD_DEFAULT, ['cost' => 5]);
        $usuario->save();
        return redirect()->route('login');
    }

    public function vistaRegistrarGerencia()
    {
        return view('admin.registrarGerencia');
    }

    public function gerenciaForm(Request $datos)
    {
        if (!$datos->gerencia)
            return view("admin.registrarGerencia", ["estatus" => "error", "mensaje" => "¡Falta informaciónnn!"]);

        $gerencia = Gerencia::where('gerencia', $datos->gerencia)->first();

        if ($gerencia)
            return view("admin.registrarGerencia", ["estatus" => "error", "mensaje" => "¡La gerencia ya ha sido registrada!"]);

        $gerencia = new Gerencia();
        $gerencia->gerencia = $datos->gerencia;
        $gerencia->save();

        return view("admin.registrarGerencia", ["estatus" => "success", "mensaje" => "¡Gerencia Registrada!"]);
    }

    public function listaUsuario()
    {
        $usuarios = Usuario::all();
        $gerencias = Gerencia::all();
        $rol = Rol::all();
        foreach ($usuarios as $valor) {
            foreach ($gerencias as $valor2) {
                if ($valor->gerencia_id == $valor2->id)
                    $valor->gerencia_id = $valor2->gerencia;
            }
            foreach ($rol as $valor3) {
                if ($valor->rol_id == $valor3->id)
                    $valor->rol_id = $valor3->rol;
            }
        }
        return view("admin.listaUsuarios", ["usuario" => $usuarios]);
    }
    public function eliminarUsuario($id)
    {
        $usuario = Usuario::where('id', $id)->first();
        if ($usuario) {
            $usuario->estatus = 'inactivo';
            $usuario->update();
            return json_encode(["estatus" => "success", "mensaje" => "Actualizado"]);
        }else {
            return json_encode(["estatus" => "error", "mensaje" => "Hubo un error"]);
        }
    }
    public function activarUsuario($id)
    {
        $usuario = Usuario::where('id', $id)->first();
        if ($usuario) {
            $usuario->estatus = 'activo';
            $usuario->update();
            return json_encode(["estatus" => "success", "mensaje" => "Actualizado"]);
        }else {
            return json_encode(["estatus" => "error", "mensaje" => "Hubo un error"]);
        }
    }
}
