@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Students</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }} ({{ $student->roll_no }})</li>
        @endforeach
    </ul>
@endsection