<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudents()
    {
        $students = Student::all();

        // namespace alias:
        $stuObj = new Student;
        $testResult =  $stuObj->testFunction();

        return view('students', ['items' => $students, 'testResult' => $testResult]);
    }
}
