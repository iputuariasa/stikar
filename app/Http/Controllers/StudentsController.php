<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use App\Models\User;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewStudent  $newStudent
     * @return \Illuminate\Http\Response
     */
    public function show(NewStudent $newStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewStudent  $newStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(NewStudent $newStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewStudent  $newStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewStudent $newStudent)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'jk' => ['required'],
            'telepon' => ['required'],
            'nama_ayah' => ['required'],
            'nama_ibu' => ['required'],
            'agama' => ['required'],
            'asal_sekolah' => ['required'],
            'tgl_lahir' => ['required'],
            'tempat_lahir' => ['required'],
            'alamat' => ['required']
        ]);

        NewStudent::where('id', $newStudent->id)
                    ->update($validatedData);
        
        $validatedDataNama = $request->validate([
                'nama' => ['required']
        ]);
        User::where('id', $newStudent->user->id)
                    ->update($validatedDataNama);

        return redirect('/users')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewStudent  $newStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewStudent $newStudent)
    {
        //
    }
}
