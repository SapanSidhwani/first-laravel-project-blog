<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents()
    {
        // -> just Eloquent model
        $students = Student::all();

        // -> Eloquent model with query builder: You can use query builder with eloquent model because it built on top of the query builder
        /*
            $students = Student::get()->where('name', 'sapan40');

            $res = Student::where('name', 'sapan40')->update(['name' => 'sapan53']);
            return $res ? "Data updated successfully" : "Error while updating the result";
        */

        // namespace alias:
        $stuObj = new Student();
        $testResult =  $stuObj->testFunction();

        return view('students', ['items' => $students, 'testResult' => $testResult]);
    }

    function addStudent(Request $req)
    {
        // eloquent model instance
        $stud = new Student();

        $stud->name = $req->name;
        $stud->email = $req->email;
        $stud->save();
        if ($stud) {
            return "Data inserted successfully";
        } else {
            return "Error while adding the user"; 
        }
    }
}
