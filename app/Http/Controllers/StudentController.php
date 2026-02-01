<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
    return view('add');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'student_name' => 'required|max:100',
            'student_course' => 'required|max:100',
            'student_marks' => 'required|integer|min:0|max:100'
        ]);

        $student = new Student();
        $student->name = $request -> student_name;
        $student->course = $request -> student_course;
        $student->marks = $request -> student_marks;

        $student->save();

        return back() -> with(['success' => 'Successfully added student infrmation']);
    }

    public function index(){
        $students = Student::get();
        return view('index',compact('students'));
    }
}
