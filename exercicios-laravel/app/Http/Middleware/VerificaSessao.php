<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificaSessao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica sessão
        if(!session()->has('usuario')):
            return redirect()->route('documentos')->with('mensagem', 'Você não tem permissão para acessar essa página. Faça login em /login');
        endif;

        return $next($request);
    }
}
