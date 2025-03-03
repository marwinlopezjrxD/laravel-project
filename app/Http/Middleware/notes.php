
<?php
// command: php artisan make:middleware AgeCheck
// What is Middleware in laravel
// after creating middleware, you need to apply it in the bootstrap/app.php file
// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class AgeCheck
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         // format for $request parameters
//         // echo "<pre>";
//         // print_r($request);
//         // access it alone(specific parameter)
//         // print_r($request->age);
//         // if user is not 18 years old and above
//         if($request->age<18){
//             die('You can not access this website');
//         }
//         return $next($request);
//     }
// }


// --------------------------------------------------------------

// What is Middleware in laravel

//AgeCheck.php

// command: php artisan make:middleware AgeCheck

// after creating middleware, you need to apply it in the bootstrap/app.php file
// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class AgeCheck
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         // echo "Age check";
//         if($request->age<18){
//             die('You are under 18 and you can not access this website');
//         }
//         return $next($request);
//     }
// }

// --------------------------------------------------------------

// What is Middleware in laravel

// CountryCheck.php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class CountryCheck
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         //test if middleware works
//         // echo "Country Check";
//         if($request->country!='philippines'){
//             // url yourURL/home?age=20&country=philippines - valid
//             // url yourURL/home?age=20&country=usa - invalid
//             die('This website can not access outside to philippines');
//         }
//         return $next($request);
//     }
// }

// --------------------------------------------------------------

// command: php artisan make:middleware AgeCheck
// What is Middleware in laravel
// after creating middleware, you need to apply it in the bootstrap/app.php file
// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class AgeCheck
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         // echo "Age check";
//         if($request->age<18){
//             die('You are under 18 and you can not access this website');
//         }
//         return $next($request);
//     }
// }

// --------------------------------------------------------------

// Middleware Group
// CountryCheck.php
// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class CountryCheck
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         //test if middleware works
//         // echo "Country Check";
//         if($request->country!='philippines'){
//             // url yourURL/home?age=20&country=philippines - valid
//             // url yourURL/home?age=20&country=usa - invalid
//             die('This website can not access outside to philippines');
//         }
//         return $next($request);
//     }
// }

// --------------------------------------------------------------
// Assigning Middleware to Routes

// AgeCheck.php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class AgeCheck
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         //test
//         // echo "test";
//         if($request->age<18){
//             die('you are underaged');
//         }
//         return $next($request);
//     }

// Assigning Middleware to Routes

// CountryCheck.php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

// class CountryCheck
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
//      */
//     public function handle(Request $request, Closure $next): Response
//     {
//         if($request->country!='philippines'){
//             die('you can not accesss this website outside philippines');
//         }
//         return $next($request);
//     }
// }
