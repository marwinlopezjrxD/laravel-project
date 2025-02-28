<?php
// Custom validation rule
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function addUser(Request $request){

        $request->validate([
            'username'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'city'=>'required'
        ],[
            'username.required'=>'Username cannot be empty.',
            'username.min'=>'Username min shoyld be at least 3 characters.',
            'username.max'=>'Username max should be at most 15 characters.',
            'email.email'=>'Email should be in email format.'
        ]);
        return $request;
    }
}




