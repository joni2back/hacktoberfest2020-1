<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Mahasiswa;
use Hash;

class MahasiswaController extends Controller
{
    public function facebook(): View
    {
        return view('welcome');
    }

    public function register(Request $request): RedirectResponse
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/');
    }
}
