<?php

namespace App\Http\Controllers;

use App\Models\NewStudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    public function index(){
        return view('general.biodata.index',[
            'title' => 'Biodata'
        ]);
    }

    public function update(Request $request){
        // dd($request['id']);
        if ($request['asal_sekolah']) {
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
    
            NewStudent::where('id', $request->id)
                        ->update($validatedData);
            
            $validatedDataNama = $request->validate([
                    'nama' => ['required']
            ]);
            User::where('new_student_id', $request['id'])
                        ->update($validatedDataNama);
    
            return redirect('/dashboard')->with('confimBio', 'Biodata Berhasil Disimpan!');
        } 
        else {
            $validatedData = $request->validate([
                'nama' => ['required'],
                'email' => ['email:dns'],
                'foto' => 'image|file|max:1024',
                'jk' => [''],
                'telepon' => [''],
                'jabatan' => [''],
                'role' => ['required'],
                'alamat' => ['required']
            ]);
    
            if($request->file('foto')){
                if($request->oldFoto){
                    Storage::delete($request->oldFoto);
                }
                $validatedData['foto'] = $request->file('foto')->store('user-image');
            }
    
            User::where('id', $request->id)
                    ->update($validatedData);
            
            return back()->with("success", "Biodata Berhasil Diubah!");
            
        }
        
    }
}
