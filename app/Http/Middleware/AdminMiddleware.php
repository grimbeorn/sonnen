<?php

namespace App\Http\Middleware;
use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // verifica si el usuario ha iniciado sesión
        // si no ha iniciado sesión, se le redirige a la ruta de inicio de sesión
        // if (!auth()->check()) {
        //     return redirect('/login');
        // }
        // si sí ha iniciado sesión, se comprueba si es un administrador
        if (!auth()->user()->admin) {
            // si no es administrador, se le redirige a la ruta de login
            return redirect('/');
        }
        return $next($request);
    }
}
