<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/list', [StudentController::class, 'list']);


