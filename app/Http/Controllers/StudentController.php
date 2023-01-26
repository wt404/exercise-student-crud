<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('index')->with('students', Student::orderByDesc('created_at')->get());
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->save();
        return redirect()->route('index')->with('success', 'New student added');
    }

    public function show(Request $request)
    {
        $student = Student::findOrFail($request->id);
        return view('show')->with('student', $student);
    }

    public function edit(Request $request)
    {
        $student = Student::findOrFail($request->id);
        return view('edit')->with('student', $student);
    }

    public function update(Request $request)
    {
        $student = Student::findOrFail($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->save();
        return redirect()->route('index')->with('success', 'Student ' . $request->id . ' has been updated');
    }

    public function destroy(Request $request)
    {
        $student = Student::findOrFail($request->id);
        $student->delete();
        return redirect()->route('index')->with('success-delete', 'Student ' . $request->id . ' has been deleted');
    }
}
