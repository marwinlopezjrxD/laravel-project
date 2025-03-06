<?php
#34 Laravel Route methods
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // test
    // function login(){
    //     return "Login function called";
    // }
    //
    function login(Request $request){
        // how to get all details on the inputs of the user
        // return $request;
        // get method name of this request
        echo $request->method();
        echo "<br />";
        // get path
        echo $request->path();
        echo "<br />";
        // get all details
        // echo $request->input('name');
        echo $request->input('password');
        echo "<br />";
        // get all request
        print_r($request->input());
        echo "<br />";
        // get all request(object interface)
        print_r($request->collect());
        echo "<br />";
        // get ip
        print_r($request->ip());
        echo "<br />";
        // check if the request method is post
        // 1 block of code is executed otherwise,
        // 2nd block is executed
        if($request->method('post')){
            echo "this is post request code";
        }else{
            echo "this is other request code";
        }
        echo "<br />";
        // check the URL
        if($request->is('user')){
            echo "this is user path request";
        }else{
            echo "this is other path request";
        }
    }
}
