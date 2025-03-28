<?php
#38 Upload file | upload and display image
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $request){
        $path = $request->file('file')->storeAs('public','dummy1.png'); //static
        $fileNameArray = explode('/',$path);
        $fileName=$fileNameArray[1];
        return view('display',['path'=>$fileName]);
    }
}
