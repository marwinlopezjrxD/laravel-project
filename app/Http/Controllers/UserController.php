<?php
// #30 Http Client
namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function getUser(){
        // fetch data from Http Client
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        // return $response;
        // display data on UI
        $response = $response->body();
        return view('user',['data' => json_decode($response)]);
    }
}
