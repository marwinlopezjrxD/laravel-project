<?php
//Blade template in Laravel
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home','home');
Route::view('about','about');
Route::view('admin','admin.login');



//command to create controller
//php artisan make:controller UserController

//call view from controller
Route::get('user-home',[UserController::class,'userHome']);
Route::get('user-about',[UserController::class,'userAbout']);
Route::get('admin-login',[UserController::class,'adminLogin']);

//pass data in view
Route::get('user-about/{name}',[UserController::class,'userAbout']);

//how to pass dynamic data directly to the route file to the view

//check if view is existing or not
