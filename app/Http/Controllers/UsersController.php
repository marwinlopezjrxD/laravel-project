<?php
// #31 Database Query Builder
namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function queries(){
        //test
        // return "queries";

        // simplest query that built on Laravel DB class
        // Testing data
        $response = DB::table('users')->get();

        // import all data in users table
        // return $response;

        // get specific data
        // $response = DB::table('users')->where('phone','1234')->get();

        // get specific data that will not show any data(no result)
        // $response = DB::table('users')->where('phone','123123123')->get();

        // get only one data
        // returns one row
        // return $response = DB::table('users')->first();



        // $response = DB::table('users')->first();
        // return $response = DB::table('users')->first();
        // will not work if you want it to display on a view,
        // because "$response" is single data and is an object, not an array

        // to make the "$response" an array and display it in a view
        // $response = DB::table('users')->first();
        // $response = [$response];

        // insert data
        // this "insert()" function accepts array
        // $response = DB::table('users')->insert([
        //     'name' => 'tony',
        //     'email' => 'tony@test.com',
        //     'phone' => '1100'
        // ]);
        // // if everything works fine, check
        // if($response){
        //     echo "data inserted";
        // }
        // else{
        //     echo "data not inserted";
        // }

        // update data
        // where(finds specific data) update(updates data)
        // this "update()" function accepts array
        // running this query again will go to data not updated
        // because data is already updated in this condition
        // $response = DB::table('users')->where('name','tony')->update([
        //         'phone' => '112233'
        // ]);
        // // if everything works fine, check
        // if($response){
        //     echo "data updated";
        // }
        // else{
        //     echo "data not updated";
        // }

        // delete data
        // where(finds specific data) delete(deletes data)
        // running this query again will go to data not deleted
        // because data is already deleted in this condition
        // $response = DB::table('users')->where('name','tony')->delete();
        // // if everything works fine, check
        // if($response){
        //     echo "data deleted";
        // }
        // else{
        //     echo "data not deleted";
        // }


        // display with the help of view
        // Testing data
        return view('users',['users'=>$response]);
    }
}
