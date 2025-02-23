<?php
// Form Validation | input validation | email | max | min | required
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){

        $request->validate([
            'username'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'city'=>'required',
            'skills'=>'required'
        ]);
        return $request;
    }
}



