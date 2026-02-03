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

    public function edit( $id){  
        $student = Student::find($id);
        return view('edit',compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $validated = $request->validate([
            'student_name'  => 'required|max:100',
            'student_course'=> 'required|max:100',
            'student_marks' => 'required|integer|min:0|max:100'
        ]);
        $student->name   = $request->student_name;
        $student->course = $request->student_course;
        $student->marks  = $request->student_marks;

        $student->save();
        return redirect('/')->with('success', 'Student updated!');
    }

    public function destroy($id)
    {
        $student = Student::find($id); 
        // If student not found
        if (!$student) {
            return redirect('/')->with(['warning'=>'Student Not Found!']);
        }
        $student->delete();
        return redirect('/')->with(['success'=> 'Student deleted successfully!']);
    }
}
