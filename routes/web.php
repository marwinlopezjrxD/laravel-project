<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//redirect one route to another route










// //for routing 
// //anchor tag
// Route::get('/test', function () {
//     return view('home');
// });

// Route::view('/home', 'home');

// Route::get('/about/{name}', function ($name) {
//     echo $name; 
//     return view('about',["name"=>$name]);
// });






// -----------------------------------------------------------
// Route::get('/test', function () {
//     return view('home');
// });

// // directly call the view
// // (view route view method roud name(home) filename(home))
// Route::view('/home', 'home');

// Route::get('/home', function () {
//     return view('home');
// });

// // normal
// Route::get('/about', function () {
//     return view('about');
// });

// //dynamic
// Route::get('/about/{name}', function ($name) {
//     echo $name; 
//     return view('about');
// });

// //dynamic
// //get in view
// //passing of data
// //whatever you are mentioning there Name ID, Username
// //can use this key(=>) in a blade file
// Route::get('/about/{name}', function ($name) {
//     echo $name; 
//     return view('about',["name"=>$name]);
// });