<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public static function perfil(){
        $perfil = array(
            "nome" => "Gustavo",
            "idade" => 27
        );
        return $perfil;
    }
}
