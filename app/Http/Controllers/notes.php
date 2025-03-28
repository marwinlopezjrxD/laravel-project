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

// #28 Eloquent Model
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class StudentController extends Controller
// {
//     // fetch data to the
//     function getStudent(){
//         $students = \App\Models\Student::all();
//         // return view('students');

//         // test if you can create an object of this model in the controller in Student.php(model)
//         // echo "Hello";

//         // test now if you can create a function in the model and call it in the controller
//         $data = new \App\Models\Student;
//         //test if the function works
//         echo $data->testFunction();

//         // pass students to the students.blade.php view
//         return view('students', ['data' => $students]);



//         //testing if the function of the controller works
//         // return "getStudents";
//     }
// }

// -----------------------------------------------------------------------------------------------

// #30 Http Client
// UserController.php

// namespace App\Http\Controllers;

// // use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

// class UserController extends Controller
// {
//     //
//     function getUser(){
//         // fetch data from Http Client
//         $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
//         // return $response;
//         // display data on UI
//         $response = $response->body();
//         return view('user',['data' => json_decode($response)]);
//     }
// }

// -----------------------------------------------------------------------------------------------

// #31 Database Query Builder
// namespace App\Http\Controllers;

// // use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// // use App\Http\Controllers\UsersController;
// use Illuminate\Support\Facades\DB;

// class UsersController extends Controller
// {
//     //
//     function queries(){
//         //test
//         // return "queries";

//         // simplest query that built on Laravel DB class
//         // Testing data
//         $response = DB::table('users')->get();

//         // import all data in users table
//         // return $response;

//         // get specific data
//         // $response = DB::table('users')->where('phone','1234')->get();

//         // get specific data that will not show any data(no result)
//         // $response = DB::table('users')->where('phone','123123123')->get();

//         // get only one data
//         // returns one row
//         // return $response = DB::table('users')->first();



//         // $response = DB::table('users')->first();
//         // return $response = DB::table('users')->first();
//         // will not work if you want it to display on a view,
//         // because "$response" is single data and is an object, not an array

//         // to make the "$response" an array and display it in a view
//         // $response = DB::table('users')->first();
//         // $response = [$response];

//         // insert data
//         // this "insert()" function accepts array
//         // $response = DB::table('users')->insert([
//         //     'name' => 'tony',
//         //     'email' => 'tony@test.com',
//         //     'phone' => '1100'
//         // ]);
//         // // if everything works fine, check
//         // if($response){
//         //     echo "data inserted";
//         // }
//         // else{
//         //     echo "data not inserted";
//         // }

//         // update data
//         // where(finds specific data) update(updates data)
//         // this "update()" function accepts array
//         // running this query again will go to data not updated
//         // because data is already updated in this condition
//         // $response = DB::table('users')->where('name','tony')->update([
//         //         'phone' => '112233'
//         // ]);
//         // // if everything works fine, check
//         // if($response){
//         //     echo "data updated";
//         // }
//         // else{
//         //     echo "data not updated";
//         // }

//         // delete data
//         // where(finds specific data) delete(deletes data)
//         // running this query again will go to data not deleted
//         // because data is already deleted in this condition
//         // $response = DB::table('users')->where('name','tony')->delete();
//         // // if everything works fine, check
//         // if($response){
//         //     echo "data deleted";
//         // }
//         // else{
//         //     echo "data not deleted";
//         // }


//         // display with the help of view
//         // Testing data
//         return view('users',['users'=>$response]);
//     }
// }

// -----------------------------------------------------------------------------------------------

// #32 Eloquent Model Query Builder
// UserController.php

// namespace App\Http\Controllers;

// // use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// // use Query Builder from the model
// // import model in controller
// use App\Models\User;

// class UserController extends Controller
// {
//     //
//     function queries(){
//         // this query is building select * from users
//         // * means all
//         // User = table name
//         // $response = User::get();
//         // return $response;

//         // how to apply where condition
//         // where function(finds specific data)
//         // get function(gets the data)
//         // $response = User::where('phone','1234')->get();

//         // get all data
//         // all function gets all data
//         // this all() function is somewhat similar to get() function
//         // $response = User::all();

//         // get first result of data
//         // will not return any array
//         // $response = User::first();
//         // use array around the result if you want to display in the <table> tag
//         // $response = [$response];
//         // gets an error if the object "$response" is not passed into an array "[]"

//         // if you want to find any result on the behalf of ID
//         // find the behalf of ID "1"
//         // $response = User::find(1);

//         // use insert()
//         // insert() function will take an array "[]" (datas)
//         // $response = User::insert([
//         //     'name' => 'kay',
//         //     'email' => 'kay@test.com',
//         //     'phone' => '0101'
//         // ]);
//         // // check if working
//         // // if $response is true
//         // if($response){
//         //     return "data inserted";
//         // }
//         // else{
//         //     return "data not inserted";
//         // }

//         // use update()
//         // where() function finds specific data
//         // update() function will take an array "[]" (datas)
//         // throws an error
//         // in DB, there are no users.updated_at in 'field list' is not found
//         // wherever you want to update any result with the help of model
//         // go to the User.php(Model) and disable the timestamp in the User Model
//         // $response = User::where('name','kay')->update([
//         //     'phone' => '112299'
//         // ]);
//         // // check if working
//         // // if $response is true
//         // if($response){
//         //     return "data updated";
//         // }
//         // else{
//         //     return "data not updated";
//         // }

//         // use delete() || delete data
//         // delete() function deletes data
//         $response = User::where('name','kay')->delete();
//         // check if working
//         // if $response is true
//         if($response){
//             return "data deleted";
//         }
//         else{
//             return "data not deleted";
//         }

//         $response = [$response];

//         // pass data to the view
//         return view('user',['users' => $response]);

//         //to test if route is working
//         // return "queries";

//     }
// }

// -----------------------------------------------------------------------------------------------

#33 Laravel Route methods

// UserController.php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     // get method can use with HTML form, but if you want
//     // to load any page directly on the browser, that time
//     // it will work only with the get route, or the route method
//     function get(){
//         return "this is get method";
//     }
//     // throws an error of 419 Page Expired
//     // security reasons, add @csrf on form
//     function post(){
//         return "this is post method";
//     }
//     function put(){
//         return "this is put method";
//     }
//     function delete(){
//         return "this is delete method";
//     }
// }

// -----------------------------------------------------------------------------------------------

#34 Laravel Route methods

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     // get method can use with HTML form, but if you want
//     // to load any page directly on the browser, that time
//     // it will work only with the get route, or the route method
//     function get(){
//         return "this is get method";
//     }
//     // throws an error of 419 Page Expired
//     // security reasons, add @csrf on form
//     function post(){
//         return "this is post method";
//     }
//     function put(){
//         return "this is put method";
//     }
//     function delete(){
//         return "this is delete method";
//     }
//     function any(){
//         return "this is any function";
//     }
//     function group1(){
//         return "this is group 1 function";
//     }
//     function group2(){
//         return "this is group 2 function";
//     }
// }

// -----------------------------------------------------------------------------------------------

// UserController.php

#35 Http Request class
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     // test
//     // function login(){
//     //     return "Login function called";
//     // }
//     //
//     function login(Request $request){
//         // how to get all details on the inputs of the user
//         // return $request;
//         // get method name of this request
//         echo $request->method();
//         echo "<br />";
//         // get path
//         echo $request->path();
//         echo "<br />";
//         // get all details
//         // echo $request->input('name');
//         echo $request->input('password');
//         echo "<br />";
//         // get all request
//         print_r($request->input());
//         echo "<br />";
//         // get all request(object interface)
//         print_r($request->collect());
//         echo "<br />";
//         // get ip
//         print_r($request->ip());
//         echo "<br />";
//         // check if the request method is post
//         // 1 block of code is executed otherwise,
//         // 2nd block is executed
//         if($request->method('post')){
//             echo "this is post request code";
//         }else{
//             echo "this is other request code";
//         }
//         echo "<br />";
//         // check the URL
//         if($request->is('user')){
//             echo "this is user path request";
//         }else{
//             echo "this is other path request";
//         }
//     }
// }


// -----------------------------------------------------------------------------------------------

#36 Session in laravel

// UserController.php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     // get request login(Request $request){//code;}
//     function login(Request $request){
//         // session
//         $request->session()->put('user',$request->input('user'));
//         $request->session()->put('allData',$request->input());

//         // test
//         // return "login function";
//         // get request
//         // return $request->input();
//         // get name data
//         // return $request->input('user');
//         // store username in session
//         // put the session you want to restore in the 2nd parameter
//         // this will show nothing
//         // $request->session()->put('user',$request->input('user'));
//         // // to show the session
//         // echo session('user');

//         // how to show the session on another URL
//         return redirect('profile');
//     }
//     // make logout function
//     function logout(){
//         // remove data from session
//         // will redirect to profile again
//         // and show no user found in session
//         session()->pull('user');
//         return redirect('profile');
//     }
// }



// -----------------------------------------------------------------------------------------------

#37 Flash Session in laravel

// UserController.php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     //

//     function addUser(Request $request){
//         // test
//         // return "add user function";

//         $request->session()->flash("message","User added successfully");
//         $request->session()->flash("name","Marwin");

//         // store user data in DB
//         return redirect('user');
//     }
// }


// -----------------------------------------------------------------------------------------------

#38 Upload file | upload and display image
// UploadController.php
// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class UploadController extends Controller
// {
//     //
//     function upload(Request $request){
//         $path = $request->file('file')->storeAs('public','dummy1.png'); //static
//         $fileNameArray = explode('/',$path);
//         $fileName=$fileNameArray[1];
//         return view('display',['path'=>$fileName]);
//     }
// }

// -----------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------


// -----------------------------------------------------------------------------------------------
