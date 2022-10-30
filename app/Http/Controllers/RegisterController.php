<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|min:5|max:255'
        ]);

        if($request->password != $request->confirm_password){
            return back()->with('message', 'Konfirmasi password salah nih');
        }
        
        $validatedData['nama'] = $request->nama;
        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        User::create($validatedData);

        return redirect('/login')->with('message', 'Registration seccessfull! Please login');
    }
}
