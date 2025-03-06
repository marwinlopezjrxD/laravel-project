<?php
#33 Laravel Route methods
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // get method can use with HTML form, but if you want
    // to load any page directly on the browser, that time
    // it will work only with the get route, or the route method
    function get(){
        return "this is get method";
    }
    // throws an error of 419 Page Expired
    // security reasons, add @csrf on form
    function post(){
        return "this is post method";
    }
    function put(){
        return "this is put method";
    }
    function delete(){
        return "this is delete method";
    }
}
