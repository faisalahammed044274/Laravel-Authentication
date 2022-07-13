<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index')->with('students', $students);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // dd('submitted');

        $student = new Student;
        $student->registration_id = $request->registration_id;
        $student->name = $request->name;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();

        return redirect()->route('index');
    }
}
