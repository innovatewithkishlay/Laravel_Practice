<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $name=$request->query('name');
        $class=$request->query('class');
        if($name=='me' && $class=="223session"){
            return $next($request);
        }else{
            return response()->json([
                "message"=>"You are not allowed to access this page",
            ]);
        }
    }
}
