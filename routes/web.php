<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| ROUTES — the front door of a Laravel app
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

// --- Part A: MVC / routes ---
Route::get('/hello/{name}', function ($name) {
    return "Hello, " . e($name);
});

Route::get('/about', [AboutController::class, 'index']);

// --- Part B & D: Resource controller ---
Route::resource('students', StudentController::class);

// --- Part C: Explicit route model binding ---
Route::get('/roll/{roll}', function (Student $roll) {
    return view('students.show', ['student' => $roll]);
});