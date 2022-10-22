<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
Use Illuminate\Support\Facades\Auth;
// use App\Models\Player;
// use App\Models\User;
// use App\Models\Cabor;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    public function formLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email|exists:admins',
            'password'=>'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(config('admin.prefix'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}    