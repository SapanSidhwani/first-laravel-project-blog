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
        $students = Student::paginate(5);

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

    public function deleteStudent($id)
    {
        $stud = Student::destroy($id);

        if ($stud) {
            return redirect('students')->with('success', 'Student deleted successfully');
        } else {
            return redirect('students')->with('error', 'Error while deleting the student');
        }
    }

    public function studentDetails($id)
    {
        $studData = Student::find($id);
        if ($studData) {
            return view('student-details', ['studData' => $studData]);
        }

        // flash message
        return redirect('students')->with('error', 'Student not found');
    }

    public function editStudent(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email,' . $id,
        ]);

        // Find the student by ID
        $student = Student::find($id);

        if (!$student) {
            return redirect()->back()->withErrors(['Student not found.']);
        }

        // Update the student's details
        $student->name = $request->input('name');
        $student->email = $request->input('email');

        if ($student->save())
            return redirect('students')->with('success', 'Student updated successfully.');
        else
            return redirect()->back()->withErrors(['Error while updating the student.']);
    }

    function deleteMultipleStudents(Request $req)
    {
        $res = Student::destroy($req->ids);
        // $res = Student::destroy([...$req->ids]);
        return $res ? redirect('students') : "Student data not deleted";
    }

    public function search(Request $req)
    {
        $result = Student::where('name', 'like', "%$req->search%")->get();
        // echo($result);
        return view('students', ['items' => $result, 'search' => $req->search]);
    }
}
