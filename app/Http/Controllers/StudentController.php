<?php
// Route Group with Controller
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "List of student";
    }
    function add(){
        return "student added";
    }
    function delete(){
        return "student deleted";
    }
    //dynamic route
    function about($name){
        return $name;
    }
}
