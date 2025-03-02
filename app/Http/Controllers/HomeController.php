<?php
// Route Group with Prefix
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //

    function show(){
        return "show student list";
    }
    function add(){
        return "add new student";
    }
}
