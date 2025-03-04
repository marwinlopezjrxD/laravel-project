<?php
// <!-- What is model? -->
//  <!-- #28 Eloquent Model Topic

//  Part of MVC Architecture(many prog lang and or frameworks use MVC also)
//  This is a PHP File with class
//  Here we write business logic and DB connections(business logic, example: calculate interest(bank))
//  But in Laravel we mostly do DB related work
//  In Laravel we have an Object-relational mapper (ORM) feature or, Eloquent Feature
//  Help us to interact with the database more easier

//  ORM is a technique to access databases


//  -->

// when making a model and a database table
// both should be related
// making a db with a name of students
// in simple words,
// table name is plural, and model name is singular


// -----------------------------------------------------------------------------------------------------

// #28 Eloquent Model
// this model fetch data from the students table
// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Student extends Model
// {
//     // use HasFactory; (dunno if this is needed, but it's in the tutorial)
//     // I created the file using the command: php artisan make:model Student and it does not have the use HasFactory; line

//     // to make the model work with the students table
//     // because on the tutorial, it is not working since the table name is changed from students to college_students table
//     protected $table = 'college_students';

//     // create function
//     // how to use this function?
//     // create an object of this model in the controller
//     // This is the function mentioned inside of StudentController.php
//     function testFunction(){
//         return "Dummy function";
//     }

// }

// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// #29 Inspecting Model
// command: php artisan show:model Student

// protected $table = 'college_students';
// this will show the ff:

// App\Models\Student .................................................................................................
//   Database ..................................................................................................... mysql
//   Table ............................................................................................. college_students

//   Attributes ............................................................................................. type / cast
//   id increments, unique ................................................................................ int(30) / int
//   name .................................................................................................. varchar(100)
//   email ................................................................................................. varchar(100)
//   batch ................................................................................................. varchar(100)

//   Relations ..........................................................................................................

//   Events .............................................................................................................

//   Observers ..........................................................................................................

// protected $table = 'colls_students'; or any other table name
// this will not show any data, because it is either
// the table does not exist or the table name is not the same as the model name
// example: protected $table = 'colls_students';

// App\Models\Student .................................................................................................
// Database ..................................................................................................... mysql
// Table ............................................................................................... colls_students
// Attributes ............................................................................................. type / cast
// Relations ..........................................................................................................

// Events .............................................................................................................

// Observers ..........................................................................................................
