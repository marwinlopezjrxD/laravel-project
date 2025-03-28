<?php
// #38 Upload file | upload and display image
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('upload','upload');
Route::post('upload',[UploadController::class,'upload']);

