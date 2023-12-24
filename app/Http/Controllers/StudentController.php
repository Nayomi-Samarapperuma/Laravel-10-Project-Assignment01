<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return inertia('Students/Index', ['students' => $students]);
    }

    public function create()
    {
        return inertia('Students/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'status' => 'required|in:active,inactive',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        return inertia('Students/Edit', ['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'status' => 'required|in:active,inactive',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }
}
