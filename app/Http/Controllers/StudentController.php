<?php
// #28 Eloquent Model
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // fetch data to the
    function getStudent(){
        $students = \App\Models\Student::all();
        // return view('students');

        // test if you can create an object of this model in the controller in Student.php(model)
        // echo "Hello";

        // test now if you can create a function in the model and call it in the controller
        $data = new \App\Models\Student;
        //test if the function works
        echo $data->testFunction();

        // pass students to the students.blade.php view
        return view('students', ['data' => $students]);



        //testing if the function of the controller works
        // return "getStudents";
    }
}
