<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $players = Player::where('id_leader', $user->id)->get();

        $data = [
            'user' => $user,
            'players' => $players
        ];

        return view('user.dashboard', $data);
    }
}
