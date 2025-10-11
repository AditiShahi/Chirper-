<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/list', function () {
    $students = Student::all(); 
    return view('students', ['students' => $students]);
});
