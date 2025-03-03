<?php
// Connect to MySQL Database
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import database library
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function users(){
        // Database command
        return DB::select('select * from users');
        // returns empty array, since there are no tables in the database thereof.
    }
}

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
