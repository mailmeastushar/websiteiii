<?php

namespace App\Http\Middleware;

use Closure;

class HTTPSConnection
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(!$request->secure())
        {
            //dd($request);
            return redirect()->to(env('APP_URL').($request->getRequestUri()));
         }
        return $next($request);
    }
}
