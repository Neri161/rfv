<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
}
