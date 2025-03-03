<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //test if middleware works
        // echo "Country Check";
        if($request->country!='philippines'){
            // url yourURL/home?age=20&country=philippines - valid
            // url yourURL/home?age=20&country=usa - invalid
            die('This website can not access outside to philippines');
        }
        return $next($request);
    }
}
