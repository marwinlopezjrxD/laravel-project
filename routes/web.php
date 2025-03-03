<?php
//
use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\AgeCheck;
// use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});


