<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
