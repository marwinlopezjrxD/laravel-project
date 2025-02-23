<?php
// View in Laravel
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //
//     function getUser(){
//         // return "This is mingu";
//         return view('user');
//     }
//     //creating a same route(or class i think) with different method
//     //call controller with routes
//     function aboutUser($name){
//         // return "Hello, This is ".$name;

//         // call view with controller
//         return view('about',['name'=>$name]);
//     }
//     function adminLogin(){
//         // return "Hello, This is ".$name;

//         //call view which is under a nested folder
//         return view('admin.login');
//     }
// }

// -----------------------------------------------------------------------------------------------

// <?php
// // View in Laravel
// // do not add comment tag before the <?php tag in the file
// namespace App\Http\Controllers;

// // use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;

// class UserController extends Controller
// {
//     //call view using controller
//     function userHome(){
//         return view('home');
//     }
//     //pass data in view
//     function userAbout($name){
//         return view('about',['name'=>$name]);
//     }
//     //how to pass dynamic data directly to the route file to the view
//     //check if view is existing or not
//     function adminLogin(){
//         //if user attempt to access a view that does not exist
//         if(View::exists('admin.sign'))
//         {
//             return view('admin.login');
//         }
//         else{
//             return "View not found";
//         }

//     }
// }

// -----------------------------------------------------------------------------------------------

//Blade template in Laravel
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //
//     function userHome(){
//         $name="ming";
//         $users=['ming','hue','lopez'];
//         //1st param, view file name, 2nd param, data to be passed to view(key value pair)
//         // return view('home',['name'=>$name]);
//         //passing array
//         //create another key value pair
//         return view('home',['name'=>$name,'users'=>$users]);
//     }
// }

// -----------------------------------------------------------------------------------------------

// include view in Laravel
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //
//     function userHome(){
//         $name="ming";
//         $users=['ming','hue','lopez'];
//         //1st param, view file name, 2nd param, data to be passed to view(key value pair)
//         // return view('home',['name'=>$name]);
//         //passing array
//         //create another key value pair
//         return view('home',['name'=>$name,'users'=>$users]);
//     }
//     function userAbout(){
//         return view('about');
//     }
// }

// -----------------------------------------------------------------------------------------------

// Input fields and form submit
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //
//     function addUser(Request $request){
//         echo "User name is: $request->username";
//         echo "<br>";
//         echo "User city is: $request->city";
//         echo "<br>";
//         echo "User email is: $request->email";
//         //other syntax
//         echo "<br>";
//         echo "User email is: ".$request->input('email');

//     }
// }

// Form handling with checkbox, radio button and dropdown
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
{
    // for testing
    // function addUser(){
    //     echo "hello from addUser Function";
    // }
    //for getting request($request)
    // function addUser(Request $request){
    //     return $request;
    // }
    // get values one by one
    // function addUser(Request $request){
    //     echo $request->city;
    //     echo "<br>";
    //     echo $request->gender;
    //     echo "<br>";
    //     echo $request->age;
    //     echo "<br>";
    //     //error, array to string conversion
    //     // echo $request->skill;
    //     //workaround, print_r to show all skills selected
    //     print_r($request->skill);
    // }
    // function addUser(Request $request){
    //     echo "User name is: $request->username";
    //     echo "<br>";
    //     echo "User city is: $request->city";
    //     echo "<br>";
    //     echo "User email is: $request->email";
    //     //other syntax
    //     echo "<br>";
    //     echo "User email is: ".$request->input('email');

    // }
}
