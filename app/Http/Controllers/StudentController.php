<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $data = [
            "students" => Student::all(),
        ];
        // dd($data);

        return view('student.index', $data);
    }
}
