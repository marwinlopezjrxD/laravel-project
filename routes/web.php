<?php
// Name Routes
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// example of name routes usage(too many routes, define a small name to a route instead of this)
// Route::view('home/profile/user', 'home');

// use of name routes example:
// Route::view('home/profile/user', 'home')->name('hm');

// how to use name routes with real examples:
// make view and controller first
// view: php artisan make:view home
