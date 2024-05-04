<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $data = [
            "students" => Student::with('jurusan')->get(),
        ];
        // dd();
        // dd($data);

        return view('student.index', $data);
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'name'  => $request->name,
            'email' => $request->email,
            'asal_sekolah' => $request->asal_sekolah,
            'address' => $request->address,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $data = [
            'student' => $student,
        ];

        return view('student.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update([
            'name'  => $request->name,
            'email' => $request->email,
            'asal_sekolah' => $request->asal_sekolah,
            'address' => $request->address,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/');
    }
}
