<?php
// Input fields and form submit
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){
        echo "User name is: $request->username";
        echo "<br>";
        echo "User city is: $request->city";
        echo "<br>";
        echo "User email is: $request->email";
        //other syntax
        echo "<br>";
        echo "User email is: ".$request->input('email');

    }
}



