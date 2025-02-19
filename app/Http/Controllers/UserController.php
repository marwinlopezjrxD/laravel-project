<?php
//Blade template in Laravel
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function userHome(){
        $name="ming";
        $users=['ming','hue','lopez'];
        //1st param, view file name, 2nd param, data to be passed to view(key value pair)
        // return view('home',['name'=>$name]);
        //passing array
        //create another key value pair
        return view('home',['name'=>$name,'users'=>$users]);
    }
}



