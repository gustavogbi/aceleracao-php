<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    public function login(Request $resquest){
        $credenciais = $resquest->all(['email', 'password']);

        $token = auth('api')->attempt($credenciais);
        if(!$token){
            return response()->json(["Você não é um usuário válido"], 401);
        }

        return response()->json([
            "token" => $token
        ], 201);
    }
}
