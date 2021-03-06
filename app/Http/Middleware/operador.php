<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;

use Closure;

class operador
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
        $consulta= DB::table('users')->where('users.id','=',auth()->user()->id)->first();
        if($consulta->rol!="operador" && $consulta->rol!="administrador"){
         return redirect('/login');
        }
 
 
         return $next($request);
    }
}
