<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActivityMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $name=$request->query('name');
        $country=$request->query('country');
        if($name!="kishlay" || $country!="India"){
            return response()->json(
                ["message"=>"Make sure to put the correct name and country"]
            );
        }
        return $next($request);
    }
}
