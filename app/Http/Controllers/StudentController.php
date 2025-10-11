<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function list(Request $request)
    {
        $query = Student::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->query('name') . '%');
        }

        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->query('email') . '%');
        }

        if ($request->has('age')) {
            $query->where('age', $request->query('age'));
        }
        if ($request->has('admission_date')) {
            $query->whereDate('admission_date', $request->query('admission_date'));
        }

        $students = $query->get();


        return view('students', compact('students'));
    }
}
