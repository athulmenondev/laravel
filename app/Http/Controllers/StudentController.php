<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'roll_no'    => 'required|string',
            'name'       => 'required|string',
            'email'      => 'required|email',
            'department' => 'required|string',
            'semester'   => 'required|integer',
            'cgpa'       => 'required|numeric',
        ]);

        Student::create($validated);

        // Flash status redirect for Part D
        return redirect()->route('students.index')->with('status', 'Student created successfully!');
    }

    public function show(Student $student)
    {
        // Implicit Route Model Binding returns 404 automatically for non-existent IDs (Part C)
        return view('students.show', compact('student'));
    }
}