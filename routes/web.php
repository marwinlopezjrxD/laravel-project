<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('home');
});
// directly call the view
// (view route view method roud name(home) filename(home))
Route::view('/home', 'home');


// Route::get('/home', function () {
//     return view('home');
// });

