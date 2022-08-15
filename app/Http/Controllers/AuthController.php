<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        $credentials  = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
            // $user = Auth::user();
            // if ($user->role == 'Admin') {
            //     $request->session()->regenerate();
            //     return redirect()->route('dashboardAdmin');
            // } 
            // elseif ($user->role == 'Operator') {
            //     $request->session()->regenerate();
            //     return redirect()->route('dashboardOperator');
            // }
            // elseif ($user->role == 'Siswa'){
            //     $request->session()->regenerate();
            //     return redirect()->intended('/dashboardNewStudent');
            // }
            // else{
            //     $request->session()->regenerate();
            //     return redirect()->intended('/');
            // }
        }
        return back()->with('loginError', 'Login Gagal!');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
