<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class CustomAuth
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
        //echo "Hii From middleware";
    
        /*$path=$request->path();
        if(($path=="login"|| $path="register") && Session::get('user'))
        {
            return redirect('/');
        }*/
        return $next($request);
    }
}
