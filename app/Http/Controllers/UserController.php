<?php
// Input fields and form submit
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // for testing
    // function addUser(){
    //     echo "hello from addUser Function";
    // }
    //for getting request($request)
    // function addUser(Request $request){
    //     return $request;
    // }
    // get values one by one
    function addUser(Request $request){
        echo $request->city;
        echo "<br>";
        echo $request->gender;
        echo "<br>";
        echo $request->age;
        echo "<br>";
        //error, array to string conversion
        // echo $request->skill;
        //workaround, print_r to show all skills selected
        print_r($request->skill);
    }
    // function addUser(Request $request){
    //     echo "User name is: $request->username";
    //     echo "<br>";
    //     echo "User city is: $request->city";
    //     echo "<br>";
    //     echo "User email is: $request->email";
    //     //other syntax
    //     echo "<br>";
    //     echo "User email is: ".$request->input('email');

    // }
}



