<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected $student;
    protected $students;
    public function index()
    {
       return view('add-student');
    }

    public function addStudent(Request $request)
    {
        $this->student          = new Student();
        $this->student->name    = $request->name;
        $this->student->email   = $request->email;
        $this->student->mobile  = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('message','Student info save successfully');

    }

    public function manage()
    {
//        return Student::orderBy('id', 'desc')->get();
//        return Student::orderBy('id', 'desc')->take(2)->get();
//        return Student::orderBy('id', 'desc')->skip(1)->first();
//        return Student::orderBy('id', 'desc')->skip(1)->take(5)->get();
        $this->students = Student::orderBy('id', 'desc')->get();
        return view('manage-student', ['students' => $this->students]);
    }
    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('edit-student', ['student' => $this->student]);
    }

    public function update(Request $request, $id)
    {
        $this->student         = Student::find($id);
        $this->student->name   = $request->name;
        $this->student->email  = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

        return redirect('/manage-student')->with('message', 'Student info update successfully');
    }

}
