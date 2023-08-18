<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if('CheckPassword_KEY'===true && 'CheckPassword_KEY'=='fhew8346gf92fd6rferw3qqr'){
            return $next($request);
        }
        else{
            return response('unaUTHORIZED');
        }
       
    }
}
