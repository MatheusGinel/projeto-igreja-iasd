<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        //Verifica se o usuário possui acesso a rota
        session_start(); 

        if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
            //return $next($request);
            dd($request);
        } else {
            return redirect()->route('site.entrar', ['erro' => 2]);
        }        
    }
}