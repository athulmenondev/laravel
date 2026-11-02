@extends('layouts.app')

@section('content')
    <h1>{{ $student->name }}</h1>
    <p><strong>Roll No:</strong> {{ $student->roll_no }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Department:</strong> {{ $student->department }}</p>
    <p><strong>Semester:</strong> {{ $student->semester }}</p>
    <p><strong>CGPA:</strong> {{ $student->cgpa }}</p>
@endsection