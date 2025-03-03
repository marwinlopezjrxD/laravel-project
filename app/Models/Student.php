<?php
// #28 Eloquent Model
// this model fetch data from the students table
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // use HasFactory; (dunno if this is needed, but it's in the tutorial)
    // I created the file using the command: php artisan make:model Student and it does not have the use HasFactory; line

    // to make the model work with the students table
    // because on the tutorial, it is not working since the table name is changed from students to college_students table
    protected $table = 'college_students';

    // create function
    // how to use this function?
    // create an object of this model in the controller
    // This is the function mentioned inside of StudentController.php
    function testFunction(){
        return "Dummy function";
    }

}
