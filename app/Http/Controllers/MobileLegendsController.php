<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class MobileLegendsController extends Controller
{
    public function create()
    {
        return view('ml');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_cabor' => 'required',
            'nama_team' => 'required',
            'universitas' => 'required',
            'link_team' => 'required|regex:(drive.google.com)',
            'nama' => 'required',
            'nim' => 'required',
            'fakultas' => 'required',
            'angkatan' => 'required',
            'link_gdrive' => 'required|regex:(drive.google.com)',
            'nickname' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'id_game' => 'required',
        ]);
        try {
            $player1 = new Player;
            $player1->nama = $request->nama1;
            $player1->nim = $request->nim1;
            $player1->id_leader = auth()->user()->id;
            $player1->fakultas = $request->fakultas1;
            $player1->angkatan = $request->angkatan1;
            $player1->link_gdrive = $request->link_gdrive1;
            $player1->nickname = $request->nickname1;
            $player1->email = $request->email1;
            $player1->hp = $request->hp1;
            $player1->id_game = $request->id_game1;
            $player1->save();
            $player2 = new Player;
            $player2->nama = $request->nama2;
            $player2->nim = $request->nim2;
            $player2->id_leader = auth()->user()->id;
            $player2->fakultas = $request->fakultas2;
            $player2->angkatan = $request->angkatan2;
            $player2->link_gdrive = $request->link_gdrive2;
            $player2->nickname = $request->nickname2;
            $player2->email = $request->email2;
            $player2->hp = $request->hp2;
            $player2->id_game = $request->id_game2;
            $player2->save();
            $player3 = new Player;
            $player3->nama = $request->nama3;
            $player3->nim = $request->nim3;
            $player3->id_leader = auth()->user()->id;
            $player3->fakultas = $request->fakultas3;
            $player3->angkatan = $request->angkatan3;
            $player3->link_gdrive = $request->link_gdrive3;
            $player3->nickname = $request->nickname3;
            $player3->email = $request->email3;
            $player3->hp = $request->hp3;
            $player3->id_game = $request->id_game3;
            $player3->save();
            $player4 = new Player;
            $player4->nama = $request->nama4;
            $player4->nim = $request->nim4;
            $player4->id_leader = auth()->user()->id;
            $player4->fakultas = $request->fakultas4;
            $player4->angkatan = $request->angkatan4;
            $player4->link_gdrive = $request->link_gdrive4;
            $player4->nickname = $request->nickname4;
            $player4->email = $request->email4;
            $player4->hp = $request->hp4;
            $player4->id_game = $request->id_game4;
            $player4->save();
            $player5 = new Player;
            $player5->nama = $request->nama5;
            $player5->nim = $request->nim5;
            $player5->id_leader = auth()->user()->id;
            $player5->fakultas = $request->fakultas5;
            $player5->angkatan = $request->angkatan5;
            $player5->link_gdrive = $request->link_gdrive5;
            $player5->nickname = $request->nickname5;
            $player5->email = $request->email5;
            $player5->hp = $request->hp5;
            $player5->id_game = $request->id_game5;
            $player5->save();
            return redirect()->route("player")->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal ditambahkan');
        }
    }
}
