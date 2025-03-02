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
        // format for $request parameters
        // echo "<pre>";
        // print_r($request);
        // access it alone(specific parameter)
        // print_r($request->age);
        // if user is not 18 years old and above
        if($request->age<18){
            die('You can not access this website');
        }
        return $next($request);
    }
}
