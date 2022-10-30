<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;

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

    public function delete()
    {
        $user = auth()->user();
        try {
            Player::where('id_leader', $user->id)->delete();
            User::where('id', $user->id)
            ->update([
                'id_cabor' => null,
                'nama_team' => null,
                'universitas' => null,
                'link_team' => null,
            ]);
            return redirect()->route('dashboard')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }
}
