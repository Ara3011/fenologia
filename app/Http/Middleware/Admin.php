<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
       dd("hola");
        /*dd($request->user);
        if(Auth::user()->id==$request->user->id)*/
            return $next($request);
        //return response()->json(["status"=>"Error"],500);

    }
}
