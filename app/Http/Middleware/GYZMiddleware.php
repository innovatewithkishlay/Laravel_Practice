<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GYZMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age=$request->query('age');
        if(!$age || $age<18){
            return response()->json(
                ["message"=>"Sorry, you are not allowed to access this page. You must be at least 18 years old to access this page."]
            );
        }
        return $next($request);
    }
}
