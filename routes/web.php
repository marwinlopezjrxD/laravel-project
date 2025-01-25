<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('home');
});

Route::view('/home', 'home');
Route::redirect('/home', '/');

Route::get('/about/{name}', function ($name) {
    echo $name; 
    return view('about',["name"=>$name]);
});



//redirect one url to another url
//Redirect route
//redirect one route to another route 
//if anyone want to visit the homepage, you will automatically
//direct user to the main page
//*first url whatever page you want to redirect
//and *second parameter where you want to redirect
//*second parameter(root page or the main page)
//*first url, *second parameter

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('home');
// });

// Route::view('/home', 'home');
// Route::redirect('/home', '/');

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