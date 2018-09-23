<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiToken
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
        if ($request->has( 'api-token' ) && Auth::guard($guard)->check() ) {
            return $next($request);    
        }
        
        $response = ['status' => 'error', 'message' => 'Authentication faild!!'];
        return $response;

        // return redirect('/');
        
    }
}
