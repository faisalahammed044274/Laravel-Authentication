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

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit')->with('student', $student);
    }

    public function store(Request $request)
    {
        // dd('submitted');

        //Check Validation
        $this->validate($request, [
            'name'              => 'required|string|max:10',
            'registration_id'   => 'required|integer|max:8',
            'department_name'   => 'required|string',
            'info'              => 'nullable',
        ]);

        $student = new Student;
        $student->registration_id = $request->registration_id;
        $student->name = $request->name;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();

        return redirect()->route('index');
    }

    public function update(Request $request, $id)
    {
        // dd('submitted');

        $student = Student::find($id);
        $student->registration_id = $request->registration_id;
        $student->name = $request->name;
        $student->department_name = $request->department_name;
        $student->info = $request->info;
        $student->save();

        return redirect()->route('index');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('index');
    }
}
