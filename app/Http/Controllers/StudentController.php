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

    $student = Student::create($validated);

    return redirect()
        ->route('students.show', $student)
        ->with('status', 'Student created successfully!');
}


    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}