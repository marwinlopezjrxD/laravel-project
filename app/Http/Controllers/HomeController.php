<?php
// Name Routes
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function show(){
        // test if the route is working
        // echo "test";
        // long way to redirect to home/profile/user
        // return redirect()->to('home/profile/user');
        // How to use name route from controller
        return redirect()->route('hm');
    }

    function user(){
        // return to_route('user');
        //shows error, needs to pass dynamic name also

        // how to pass dynamic name, use array
                                // key(name) should be the same on the routes/web.php {name}.
        return to_route('user', ['name'=>'ming']);
    }
}
