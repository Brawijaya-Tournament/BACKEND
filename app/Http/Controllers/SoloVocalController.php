<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;

class SoloVocalController extends Controller
{
    public function createSolo()
    {
        return view('user.vocal.create');
    }

    public function storeSolo(Request $request)
    {
        $request->validate([
            'id_cabor' => 'required',
            'nama_team' => 'required',
            'universitas' => 'required',
            'link_team' => 'required|regex:(drive.google.com)',

            'nama1' => 'required',
            'nim1' => 'required|unique:players',
            'fakultas1' => 'required',
            'angkatan1' => 'required',
            'link_gdrive1' => 'required|regex:(drive.google.com)',
            'email1' => 'required|unique:players|email',
            'hp1' => 'required',
            'gender1' => 'required',
        ]);
        try {
            $user['id_cabor'] = $request->id_cabor;
            $user['nama_team'] = $request->nama_team;
            $user['universitas'] = $request->universitas;
            $user['link_team'] = $request->link_team;
            User::where('id', auth()->user()->id)->update($user);

            $player1['nama'] = $request->nama1;
            $player1['nim']= $request->nim1;
            $player1['id_leader'] = auth()->user()->id;
            $player1['fakultas'] = $request->fakultas1;
            $player1['angkatan'] = $request->angkatan1;
            $player1['link_gdrive'] = $request->link_gdrive1;
            $player1['email'] = $request->email1;
            $player1['hp'] = $request->hp1;
            $player1['gender'] = $request->gender1;
            Player::create($player1);
            
            return redirect()->route("dashboard")->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Data gagal ditambahkan');
        }
    }
}
