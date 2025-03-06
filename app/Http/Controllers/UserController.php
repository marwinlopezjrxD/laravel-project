<?php
#36 Session in laravel
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // get request login(Request $request){//code;}
    function login(Request $request){
        // session
        $request->session()->put('user',$request->input('user'));
        $request->session()->put('allData',$request->input());

        // test
        // return "login function";
        // get request
        // return $request->input();
        // get name data
        // return $request->input('user');
        // store username in session
        // put the session you want to restore in the 2nd parameter
        // this will show nothing
        // $request->session()->put('user',$request->input('user'));
        // // to show the session
        // echo session('user');

        // how to show the session on another URL
        return redirect('profile');
    }
    // make logout function
    function logout(){
        // remove data from session
        // will redirect to profile again
        // and show no user found in session
        session()->pull('user');
        return redirect('profile');
    }
}
