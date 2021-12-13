<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    function perfil() {
        $perfil = Usuario::perfil();
        return view('perfil', compact('perfil'));
    }
}
