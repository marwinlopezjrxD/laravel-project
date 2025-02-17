<?php

use Illuminate\Support\Facades\Route;
//import file on top to read the file
use App\Http\Controllers\UserController;
//if forgot too import
// use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

//insert name of controller you are calling
//1st parameter the path you want to show

//2nd create an array that has two elements:
//class name and method name
Route::get('user',[UserController::class,'getUser']);

//call controller with routes
// Route::get('about',[UserController::class,'aboutUser']);

//Pass data from router to controller
//use curly braces to pass the parameter
// /{name} will pass to the web.php first
// from there, we are passing this to the controller
Route::get('about/{name}',[UserController::class,'aboutUser']);

//call view with controller
// on UserController.php and about.blade.php

//call view which is under a nested folder
Route::get('admin-login',[UserController::class,'adminLogin']);

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
