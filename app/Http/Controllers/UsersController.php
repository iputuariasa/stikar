<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('operator.users.index',[
            'users' => User::latest()->filter(request(['searchUsers']))->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operator.users.create');
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
            'slug' => [''],
            'nama' => ['required'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required'],
            'foto' => 'image|file|max:1024',
            'jk' => [''],
            'telepon' => [''],
            'jabatan' => [''],
            'role' => ['required'],
            'alamat' => ['required']
        ]);

        $validatedData['slug'] = preg_replace("/[^a-zA-Z0-9]/", "", bcrypt($request->nama));

        if($request->file('foto')){
            $validatedData['foto'] = $request->file('foto')->store('user-image');
        }
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/users')->with('success', 'User Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('operator.users.show',[
            'user' => $user,
            'newStudent' => $user->newStudent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('operator.users.edit',[
            'user' => $user,
            'newStudent' => $user->newStudent
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->newpassword){

            if($request->newpassword == $request->corfimpassword){
                $request->validate([
                    'newpassword' => 'required',
                    'corfimpassword' => 'required',
                ]);
    
                User::where('id', $user->id)->update([
                    'password' => Hash::make($request->newpassword)
                ]);

                return redirect('/users')->with('success', 'Password User Berhasil Diubah!');
            }
            else{
                return back()->with('errorPassword', 'Password Konfirmasi Tidak Sama!');
            }
        }

        $validatedData = $request->validate([
            'nama' => ['required'],
            'foto' => 'image|file|max:1024',
            'jk' => ['required'],
            'telepon' => ['required'],
            'jabatan' => ['required'],
            'role' => ['required'],
            'alamat' => ['required']
        ]);

        if($request->file('foto')){
            if($request->oldFoto){
                Storage::delete($request->oldFoto);
            }
            $validatedData['foto'] = $request->file('foto')->store('user-image');
        }

        User::where('id', $user->id)
                ->update($validatedData);
        
        return redirect('/users')->with('success', 'User Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd($user);
        if($user['new_student_id']){
            if($user->foto){
                Storage::delete($user->foto);
            }
            User::destroy($user->id);
            NewStudent::destroy($user->newStudent->id);
            return redirect('/users')->with('success', 'User Berhasil Dihapus!');
        }
        else{
            if($user->foto){
                Storage::delete($user->foto);
            }
            User::destroy($user->id);
            return redirect('/users')->with('success', 'User Berhasil Dihapus!');
        }
    }
}
