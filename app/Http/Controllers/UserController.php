<?php
#37 Flash Session in laravel

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function addUser(Request $request){
        // test
        // return "add user function";

        $request->session()->flash("message","User added successfully");
        $request->session()->flash("name","Marwin");

        // store user data in DB
        return redirect('user');
    }
}
