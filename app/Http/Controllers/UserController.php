<?php
// Custom Validation Message | Advanced validation feature
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
        ],[
            'username.required'=>'Username cannot be empty.',
            'username.min'=>'Username min shoyld be at least 3 characters.',
            'username.max'=>'Username max should be at most 15 characters.',
            // 'email.email'=>'Email should be in email format.'
            // 'city.required'=>'City cannot be empty.'
        ]);
        return $request;
    }
}




