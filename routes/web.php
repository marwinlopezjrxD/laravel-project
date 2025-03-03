<?php
// #28 Eloquent Model
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// insert controller function to the route
Route::get('students', [StudentController::class, 'getStudent']);
