<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Obtén la ruta donde el usuario debería ser redirigido cuando no esté autenticado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('InicioSesion.inisioSesion'); // Cambia esta ruta a la que necesitas.
        }
    }
}
