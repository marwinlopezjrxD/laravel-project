<?php
// #31 Database Query Builder
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('users',[UsersController::class,'queries']);
