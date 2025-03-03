<?php
// #27 Display database data on UI
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import database library
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function users(){
        // Database command
        $users = DB::select('select * from users');
        // Pass data to view
        return view('users',["users"=>$users]);
    }
}


