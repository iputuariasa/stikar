<?php

namespace App\Http\Controllers;

use App\Models\Motivation;

class HomeStikar extends Controller
{
    public function index(){
        return view('index',[
            'motivations' => Motivation::latest()->get()
        ]);
    }
}