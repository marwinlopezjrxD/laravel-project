<?php
// View in Laravel
// do not add comment tag before the <?php tag in the file
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //call view using controller
    function userHome(){
        return view('home');
    }
    function userAbout(){
        return view('about');
    }
    function adminLogin(){
        return view('admin.login');
    }
}
