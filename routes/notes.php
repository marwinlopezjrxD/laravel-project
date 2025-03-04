<?php

// use Illuminate\Support\Facades\Route;
//import file on top to read the file
// use App\Http\Controllers\UserController;
//if forgot too import
// use App\Http\Controllers\UserController;
// Route::get('/', function () {
    // return view('welcome');
// });

//insert name of controller you are calling
//1st parameter the path you want to show

//2nd create an array that has two elements:
//class name and method name
// Route::get('user',[UserController::class,'getUser']);

//call controller with routes
// Route::get('about',[UserController::class,'aboutUser']);

//Pass data from router to controller
//use curly braces to pass the parameter
// /{name} will pass to the web.php first
// from there, we are passing this to the controller
// Route::get('about/{name}',[UserController::class,'aboutUser']);

//call view with controller
// on UserController.php and about.blade.php

//call view which is under a nested folder
// Route::get('admin-login',[UserController::class,'adminLogin']);

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

// -----------------------------------------------------------

// // View in Laravel
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view('home','home');
// Route::view('about','about');
// Route::view('admin','admin.login');



// //command to create controller
// //php artisan make:controller UserController

// //call view from controller
// Route::get('user-home',[UserController::class,'userHome']);
// Route::get('user-about',[UserController::class,'userAbout']);
// Route::get('admin-login',[UserController::class,'adminLogin']);

// //pass data in view
// Route::get('user-about/{name}',[UserController::class,'userAbout']);

// //how to pass dynamic data directly to the route file to the view

// //check if view is existing or not

// -----------------------------------------------------------
// include view in Laravel

// Route::get('user-home',[UserController::class,'userHome']);
// Route::get('user-about',[UserController::class,'userAbout']);

// -----------------------------------------------------------
// Input fields and form submit

// Route::view('user-form','user-form');
//error, use Route::post instead
// Route::get('addUser',[UserController::class,'addUser']);

//419 page expire, not passing csrf token
// Route::post('addUser',[UserController::class,'addUser']);

// FOR FORMS TUTORIAL
//
// Route::view('user-form', 'user-form');
// Route::post('adduser', [UserController::class, 'addUser']);

// URL Generation
// Route::view('home', 'home');
// Route::view('about', 'about');

// // same view, different path(user)
// // yourURL/user
// // Route::view('user', 'home');

// // make URL with child path
// Route::view('about/{name}', 'about');


// Route Group with Prefix
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// //w/o prefix

// // Route::view('home','home');
// // Route::get('student/show',[HomeController::class,'show']);
// // Route::get('student/add',[HomeController::class,'add']);


// //prefix w/student keyword
// //do this instead of using Route::view('student/etc','etc');
// //                   or    Route::get
// Route::prefix('student')->group(function(){
//     Route::view('/home','home');
//     Route::get('/show',[HomeController::class,'show']);
//     Route::get('/add',[HomeController::class,'add']);
// });

// //different home for the diff country students with a diff route
// //write this prefix
// //instead of yourURL/student/philippines/home
// Route::prefix('student/philippines')->group(function(){
//     Route::view('/home','home');
//     Route::get('/show',[HomeController::class,'show']);
//     Route::get('/add',[HomeController::class,'add']);
// });


// -----------------------------------------------------------

// Route Group with Controller
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });


// //instead of writing this
// // Route::get('show',[StudentController::class,'show']);
// // Route::get('add',[StudentController::class,'add']);
// // Route::get('delete',[StudentController::class,'delete']);
// // Route::get('about/{name}',[StudentController::class,'about']);

// //use this route group with controller, for the same purpose and reduce redundancy
// Route::controller(StudentController::class)->group(function(){
//     Route::get('show','show');
//     Route::get('add','add');
//     Route::get('delete','delete');
//     Route::get('about/{name}','about');
// });

// -----------------------------------------------------------

// Middleware Group
// use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('home', 'home')->middleware('check1');

// // apply this middle ware to all of this routes
// // yourURL/user?age=20&country=philippines
// // yourURL/user?age=10&country=philippines - age not valid
// // yourURL/user?age=20&country=usa - age is valid but country not valid
// Route::middleware('check1')->group(function(){
//     Route::view('about', 'about');
//     Route::view('list', 'about');
//     Route::view('contact', 'about');
//     Route::view('user', 'about');
// });


// // Route::view('about', 'about');
// // Route::view('list', 'about');
// // Route::view('contact', 'about');
// // Route::view('user', 'about');

// -----------------------------------------------------------

// Assigning Middleware to Routes
// use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\AgeCheck;
// use App\Http\Middleware\CountryCheck;

// Route::get('/', function () {
//     return view('welcome');
// });

// // apply middleware to routes
// // php artisan make:view home
// // php artisan make:view about
// //


// // home?age=18&country=usa - cannot access outside philippines
// // home?age=17&country=philippines - you are underaged
// // home?age=18&country=philippines - can access

// // apply two or multiple middleware on the home route
// Route::view('home', 'home')->middleware(AgeCheck::class,CountryCheck::class);
// Route::view('about', 'about')->middleware(AgeCheck::class);


// -----------------------------------------------------------

// Display database data on UI(DATABASE #27)
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('users', [UserController::class, 'users']);

// -----------------------------------------------------------

// #28 Eloquent Model
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// // insert controller function to the route
// Route::get('students', [StudentController::class, 'getStudent']);


// -----------------------------------------------------------

// #30 Http Client
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });
//            //view   //controller
// Route::get('user', [UserController::class, 'getUser']);



// #31 Database Query Builder
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UsersController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('users',[UsersController::class,'queries']);

// -----------------------------------------------------------

// // #32 Eloquent Model Query Builder
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('user',[UserController::class,'queries']);
