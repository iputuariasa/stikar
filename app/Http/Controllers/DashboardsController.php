<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use App\Models\NewStudent;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    public function index(){
        return view('general.dashboard.index',[
            'title' => 'Dashboard',
            'users' => User::where('id', auth()->user()->id)->get(),
            'newStudents' => NewStudent::where('id', auth()->user()->new_student_id)->get(),
            'motivations' => Motivation::latest()->get()
        ]);
    }
}
