<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function bienvenida(){
        return view('bienvenida');
    }
}
