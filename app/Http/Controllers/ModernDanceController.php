<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;

class ModernDanceController extends Controller
{
    public function index()
    {
        return view('user.moderndance.index');
    }
    public function create()
    {
        $isRegister = User::where('id', '=', auth()->user()->id)->first();

        if($isRegister->nama_team != null){
            return redirect('/dashboard')->with('message', 'Anda sudah melakukan registrasi!');
        }

        return view('user.dance.create');
    }

    public function store(Request $request)
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

            'nama2' => 'required',
            'nim2' => 'required|unique:players',
            'fakultas2' => 'required',
            'angkatan2' => 'required',
            'link_gdrive2' => 'required|regex:(drive.google.com)',
            'email2' => 'required|unique:players|email',
            'hp2' => 'required',
            'gender2' => 'required',

            'nama3' => 'required',
            'nim3' => 'required|unique:players',
            'fakultas3' => 'required',
            'angkatan3' => 'required',
            'link_gdrive3' => 'required|regex:(drive.google.com)',
            'email3' => 'required|unique:players|email',
            'hp3' => 'required',
            'gender3' => 'required',

            'nama4' => 'required',
            'nim4' => 'required|unique:players',
            'fakultas4' => 'required',
            'angkatan4' => 'required',
            'link_gdrive4' => 'required|regex:(drive.google.com)',
            'email4' => 'required|unique:players|email',
            'hp4' => 'required',
            'gender4' => 'required',

            'nama5' => 'required',
            'nim5' => 'required|unique:players',
            'fakultas5' => 'required',
            'angkatan5' => 'required',
            'link_gdrive5' => 'required|regex:(drive.google.com)',
            'email5' => 'required|unique:players|email',
            'hp5' => 'required',
            'gender5' => 'required',
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

            $player2['nama'] = $request->nama2;
            $player2['nim']= $request->nim2;
            $player2['id_leader'] = auth()->user()->id;
            $player2['fakultas'] = $request->fakultas2;
            $player2['angkatan'] = $request->angkatan2;
            $player2['link_gdrive'] = $request->link_gdrive2;
            $player2['email'] = $request->email2;
            $player2['hp'] = $request->hp2;
            $player2['gender'] = $request->gender2;
            Player::create($player2);

            $player3['nama'] = $request->nama3;
            $player3['nim']= $request->nim3;
            $player3['id_leader'] = auth()->user()->id;
            $player3['fakultas'] = $request->fakultas3;
            $player3['angkatan'] = $request->angkatan3;
            $player3['link_gdrive'] = $request->link_gdrive3;
            $player3['email'] = $request->email3;
            $player3['hp'] = $request->hp3;
            $player3['gender'] = $request->gender3;
            Player::create($player3);

            $player4['nama'] = $request->nama4;
            $player4['nim']= $request->nim4;
            $player4['id_leader'] = auth()->user()->id;
            $player4['fakultas'] = $request->fakultas4;
            $player4['angkatan'] = $request->angkatan4;
            $player4['link_gdrive'] = $request->link_gdrive4;
            $player4['email'] = $request->email4;
            $player4['hp'] = $request->hp4;
            $player4['gender'] = $request->gender4;
            Player::create($player4);

            $player5['nama'] = $request->nama5;
            $player5['nim']= $request->nim5;
            $player5['id_leader'] = auth()->user()->id;
            $player5['fakultas'] = $request->fakultas5;
            $player5['angkatan'] = $request->angkatan5;
            $player5['link_gdrive'] = $request->link_gdrive5;
            $player5['email'] = $request->email5;
            $player5['hp'] = $request->hp5;
            $player5['gender'] = $request->gender5;
            Player::create($player5);

            return redirect()->route("dashboard")->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Data gagal ditambahkan');
        }
    }
}
