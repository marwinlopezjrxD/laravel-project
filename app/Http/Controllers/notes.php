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

// -----------------------------------------------------------------------------------------------

// Form Validation | input validation | email | max | min | required
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //
//     function addUser(Request $request){

//         $request->validate([
//             'username'=>'required | min:3 | max:15',
//             'email'=>'required | email',
//             'city'=>'required',
//             'skills'=>'required'
//         ]);
//         return $request;
//     }
// }

// -----------------------------------------------------------------------------------------------

// Custom Validation Message | Advanced validation feature
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //
//     function addUser(Request $request){

//         $request->validate([
//             'username'=>'required | min:3 | max:15',
//             'email'=>'required | email',
//             'city'=>'required',
//             'skills'=>'required'
//         ],[
//             'username.required'=>'Username cannot be empty.',
//             'username.min'=>'Username min shoyld be at least 3 characters.',
//             'username.max'=>'Username max should be at most 15 characters.',
//             // 'email.email'=>'Email should be in email format.'
//             // 'city.required'=>'City cannot be empty.'
//         ]);
//         return $request;
//     }
// }

// Custom validation rule
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //
//     function addUser(Request $request){

//         $request->validate([
//             'username'=>'required | min:3 | max:15',
//             'email'=>'required | email',
//             //custom validation rule(uppercase)
//             'city'=>'required | uppercase'
//         ],[
//             'username.required'=>'Username cannot be empty.',
//             'username.min'=>'Username min shoyld be at least 3 characters.',
//             'username.max'=>'Username max should be at most 15 characters.',
//             'email.email'=>'Email should be in email format.',
//             'city.uppercase'=>'City should be in uppercase only'
//         ]);
//         return $request;
//     }
// }

// Name Routes
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     //

//     function show(){
//         // test if the route is working
//         // echo "test";
//         // long way to redirect to home/profile/user
//         // return redirect()->to('home/profile/user');
//         // How to use name route from controller
//         return redirect()->route('hm');
//     }

//     function user(){
//         // return to_route('user');
//         //shows error, needs to pass dynamic name also

//         // how to pass dynamic name, use array
//                                 // key(name) should be the same on the routes/web.php {name}.
//         return to_route('user', ['name'=>'ming']);
//     }
// }

// -----------------------------------------------------------------------------------------------

// Route Group with Prefix
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class Homecontroller extends Controller
// {
//     //

//     function show(){
//         return "show student list";
//     }
//     function add(){
//         return "add new student";
//     }
// }

// -----------------------------------------------------------------------------------------------

// Route Group with Controller
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class StudentController extends Controller
// {
//     //
//     function show(){
//         return "List of student";
//     }
//     function add(){
//         return "student added";
//     }
//     function delete(){
//         return "student deleted";
//     }
//     //dynamic route
//     function about($name){
//         return $name;
//     }
// }

// -----------------------------------------------------------------------------------------------

// Connect to MySQL Database
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// // import database library
// use Illuminate\Support\Facades\DB;

// class UserController extends Controller
// {
//     //
//     function users(){
//         // Database command
//         return DB::select('select * from users');
//         // returns empty array, since there are no tables in the database thereof.
//     }
// }

// http://127.0.0.1:8000/users
// "id": 1,
// "name": "ming",
// "email": "ming@test.com",
// "email_verified_at": "2025-03-03 21:11:06",
// "password": "1234",
// "remember_token": null,
// "created_at": "2025-03-03 21:11:06",
// "updated_at": "2025-03-27 21:11:06"

// "id": 2,
// "name": "cat",
// "email": "cat@test.com",
// "email_verified_at": "2025-03-04 21:16:04",
// "password": "12345",
// "remember_token": null,
// "created_at": null,
// "updated_at": null


// -----------------------------------------------------------------------------------------------

// #27 Display database data on UI

// UserController.php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// // import database library
// use Illuminate\Support\Facades\DB;

// class UserController extends Controller
// {
//     //
//     function users(){
//         // Database command
//         $users = DB::select('select * from users');
//         // Pass data to view
//         return view('users',["users"=>$users]);
//     }
// }
