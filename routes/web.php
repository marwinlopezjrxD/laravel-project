<?php
// URL Generation
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('about', 'about');

// same view, different path(user)
// yourURL/user
// Route::view('user', 'home');

// make URL with child path
Route::view('about/{name}', 'about');
