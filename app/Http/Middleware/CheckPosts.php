<?php

namespace App\Http\Middleware;

use Closure;

class CheckPosts
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		/*
		 * al final no voy a usar este middleware, quería dejar la URL limpia sin
		 * el segmento "articulo" pero puede dar problemas (ya lo estudiaré) con
		 * el middleware de cambio de idioma. La solución tomada provisional es
		 * cambiar "articulo" por "article" y dejar el segmento visible en la URL
		 */
        return $next($request);
    }
}
