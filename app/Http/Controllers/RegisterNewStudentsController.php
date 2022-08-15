<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterNewStudentsController extends Controller
{
    public function index(){
        return view('PPSB.register');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'role' => ['required'],
            'slug' => [''],
            'nama' => ['required'],
            'new_student_id' => ['required'],
            'email' => ['email:dns'],
            'password' => ['required','confirmed']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['slug'] = preg_replace("/[^a-zA-Z0-9]/", "", bcrypt($request->nama));

        User::create($validatedData);

        $validatedDataNewStudent = $request->validate([
            'new_student_id' => ['required'],
            'nama' => ['required'],
            'slug' => ['']
        ]);

        $validatedDataNewStudent['id'] = $request->new_student_id;
        $validatedDataNewStudent['slug'] = preg_replace("/[^a-zA-Z0-9]/", "", bcrypt($request->nama));

        NewStudent::create($validatedDataNewStudent);

        return redirect('/PPSB/register')->with('success', 'Registrasi Berhasil!');
    }
}
