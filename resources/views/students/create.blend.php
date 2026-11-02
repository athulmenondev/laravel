@extends('layouts.app')

@section('content')
    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label>Roll No:</label>
            <input type="text" name="roll_no" required>
        </div>
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Department:</label>
            <input type="text" name="department" value="CSE" required>
        </div>
        <div>
            <label>Semester:</label>
            <input type="number" name="semester" value="7" required>
        </div>
        <div>
            <label>CGPA:</label>
            <input type="number" step="0.01" name="cgpa" required>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection