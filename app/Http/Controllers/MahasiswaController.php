<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Hash;

class MahasiswaController extends Controller
{
    public function facebook(){
        return view('welcome');
    }

    public function register(Request $request){
        
        Mahasiswa::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/');
    }
}
