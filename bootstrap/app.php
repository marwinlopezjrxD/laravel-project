<?php
// What is Middleware in laravel
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
// 1.
use App\Http\Middleware\AgeCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // two ways to apply middleware,
        // 1. import it in route file, namespace path.
        // $middleware->append(AgeCheck::class);
        // registered all of the routes
        // 2. other syntax(global middleware)
           $middleware->use([
            //    \App\Http\Middleware\AgeCheck::class
               // removing this, makes the middleware
               // or restrictions of the given AgeCheck middleware
               // to be removed
               // when now typing yourURL/?age=10
           ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
