<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use Illuminate\Http\Request;

class MotivationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(request('searchMotivations'));
        return view('admin.motivations.index',[
            'motivations' => Motivation::latest()->filter(request(['searchMotivations']))->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.motivations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pencetus' => ['required'],
            'isi' => ['required','max:300']
        ]);

        Motivation::create($validatedData);

        return redirect('/dashboardAdmin/motivations')->with('success', 'Motivasi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function show(Motivation $motivation)
    {
        return view('admin.motivations.show',[
            'motivation' => $motivation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function edit(Motivation $motivation)
    {
        return view('admin.motivations.edit',[
            'motivation' => $motivation
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motivation $motivation)
    {
        $validatedData = $request->validate([
            'pencetus' => ['required'],
            'isi' => ['required','max:300']
        ]);

        Motivation::where('id', $motivation->id)
                    ->update($validatedData);

        return redirect('/dashboardAdmin/motivations')->with('success', 'Motivasi Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motivation  $motivation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motivation $motivation)
    {
        Motivation::destroy($motivation->id);

        return redirect('/dashboardAdmin/motivations')->with('success', 'Motivasi Berhasil Dihapus!');
    }
}
