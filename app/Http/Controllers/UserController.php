<?php
// #32 Eloquent Model Query Builder
namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Query Builder from the model
// import model in controller
use App\Models\User;

class UserController extends Controller
{
    //
    function queries(){
        // this query is building select * from users
        // * means all
        // User = table name
        // $response = User::get();
        // return $response;

        // how to apply where condition
        // where function(finds specific data)
        // get function(gets the data)
        // $response = User::where('phone','1234')->get();

        // get all data
        // all function gets all data
        // this all() function is somewhat similar to get() function
        // $response = User::all();

        // get first result of data
        // will not return any array
        // $response = User::first();
        // use array around the result if you want to display in the <table> tag
        // $response = [$response];
        // gets an error if the object "$response" is not passed into an array "[]"

        // if you want to find any result on the behalf of ID
        // find the behalf of ID "1"
        // $response = User::find(1);

        // use insert()
        // insert() function will take an array "[]" (datas)
        // $response = User::insert([
        //     'name' => 'kay',
        //     'email' => 'kay@test.com',
        //     'phone' => '0101'
        // ]);
        // // check if working
        // // if $response is true
        // if($response){
        //     return "data inserted";
        // }
        // else{
        //     return "data not inserted";
        // }

        // use update()
        // where() function finds specific data
        // update() function will take an array "[]" (datas)
        // throws an error
        // in DB, there are no users.updated_at in 'field list' is not found
        // wherever you want to update any result with the help of model
        // go to the User.php(Model) and disable the timestamp in the User Model
        // $response = User::where('name','kay')->update([
        //     'phone' => '112299'
        // ]);
        // // check if working
        // // if $response is true
        // if($response){
        //     return "data updated";
        // }
        // else{
        //     return "data not updated";
        // }

        // use delete() || delete data
        // delete() function deletes data
        $response = User::where('name','kay')->delete();
        // check if working
        // if $response is true
        if($response){
            return "data deleted";
        }
        else{
            return "data not deleted";
        }

        $response = [$response];

        // pass data to the view
        return view('user',['users' => $response]);

        //to test if route is working
        // return "queries";

    }
}
