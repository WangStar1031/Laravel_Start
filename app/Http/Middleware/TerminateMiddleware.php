<?php

namespace Tutorialspoint\Http\Middleware;

use Closure;

class TerminateMiddleware
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
        echo "Executing statements of handle method of TerminateMiddleware.";
        return $next($request);
    }
    public function terminate($request, $response){
        echo "<br>Executing statements of terminate method of TerminateMiddleware.";
    }
}
