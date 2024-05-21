<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class VerificarAutenticacion
{

    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('id_usuario')) {
            return redirect()->route('iniciarsesion')->with('error', 'Debe iniciar sesión para acceder.');
        }

        return $next($request);
    }

}
