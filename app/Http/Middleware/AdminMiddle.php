<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddle
{  public function handle($request, Closure $next)
    {
        //verifica en el registro si el rol es administrador
        if (auth()->check() && auth()->user()->rol === 'administrador') {
            //redirige al usuario al menu de administrador
            return redirect('/menuAdmin');
        }

        return $next($request);
    }
}
