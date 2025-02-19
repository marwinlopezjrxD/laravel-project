<?php
//Blade template in Laravel
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function userHome(){
        return view('userHome');
    }

}
