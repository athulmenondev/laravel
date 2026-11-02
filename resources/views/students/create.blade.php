@extends('layouts.app')

@section('content')
    <h1>Create Student</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div>
            <label>Roll No:</label>
            <input type="text" name="roll_no" value="{{ old('roll_no') }}" required>
        </div>
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label>Department:</label>
            <input type="text" name="department" value="{{ old('department', 'CSE') }}">
        </div>
        <div>
            <label>Semester:</label>
            <input type="number" name="semester" value="{{ old('semester', 7) }}">
        </div>
        <div>
            <label>CGPA:</label>
            <input type="number" step="0.01" name="cgpa" value="{{ old('cgpa') }}">
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection