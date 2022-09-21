<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $data = [
            'user' => $user
        ];

        return view('user.dashboard', $data);
    }
}
