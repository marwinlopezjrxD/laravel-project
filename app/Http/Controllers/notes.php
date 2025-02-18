<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        // return "This is mingu";
        return view('user');
    }
    //creating a same route(or class i think) with different method
    //call controller with routes
    function aboutUser($name){
        // return "Hello, This is ".$name;

        // call view with controller
        return view('about',['name'=>$name]);
    }
    function adminLogin(){
        // return "Hello, This is ".$name;

        //call view which is under a nested folder
        return view('admin.login');
    }
}
