<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/list', [StudentController::class, 'list']);


<<<<<<< HEAD
=======
Route::get('/list', function () {
    $students = Student::all(); 
    return view('students', ['students' => $students]);
});
>>>>>>> 224f9dc144ebac9b69aa16da99ef0847ed7ac5af
