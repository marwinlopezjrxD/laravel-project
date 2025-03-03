<?php
// command: php artisan make:middleware AgeCheck
// What is Middleware in laravel
// after creating middleware, you need to apply it in the bootstrap/app.php file
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "Age check";
        if($request->age<18){
            die('You are under 18 and you can not access this website');
        }
        return $next($request);
    }
}
