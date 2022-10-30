<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;

class MobileLegendsController extends Controller
{
    public function index()
    {
        return view('user.mobilelegends.index');
    }
    
    public function create()
    {
        $isRegister = User::where('id', '=', auth()->user()->id)->first();

        if($isRegister->nama_team != null){
            return redirect('/dashboard')->with('message', 'Anda sudah melakukan registrasi!');
        }

        return view('user.mobilelegends.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_team' => 'required',
            'universitas' => 'required',

            'nama1' => 'required',
            'nim1' => 'required',
            'fakultas1' => 'required',
            'angkatan1' => 'required',
            'link_gdrive1' => 'required|regex:(drive.google.com)',
            'email1' => 'required|email',
            'hp1' => 'required',
            'gender1' => 'required',
            'id_game1' => 'required',
            'nickname1' => 'required',

            'nama2' => 'required',
            'nim2' => 'required',
            'fakultas2' => 'required',
            'angkatan2' => 'required',
            'link_gdrive2' => 'required|regex:(drive.google.com)',
            'email2' => 'required|email',
            'hp2' => 'required',
            'gender2' => 'required',
            'id_game2' => 'required',
            'nickname2' => 'required',

            'nama3' => 'required',
            'nim3' => 'required',
            'fakultas3' => 'required',
            'angkatan3' => 'required',
            'link_gdrive3' => 'required|regex:(drive.google.com)',
            'email3' => 'required|email',
            'hp3' => 'required',
            'gender3' => 'required',
            'id_game3' => 'required',
            'nickname3' => 'required',

            'nama4' => 'required',
            'nim4' => 'required',
            'fakultas4' => 'required',
            'angkatan4' => 'required',
            'link_gdrive4' => 'required|regex:(drive.google.com)',
            'email4' => 'required|email',
            'hp4' => 'required',
            'gender4' => 'required',
            'id_game4' => 'required',
            'nickname4' => 'required',

            'nama5' => 'required',
            'nim5' => 'required',
            'fakultas5' => 'required',
            'angkatan5' => 'required',
            'link_gdrive5' => 'required|regex:(drive.google.com)',
            'email5' => 'required|email',
            'hp5' => 'required',
            'gender5' => 'required',
            'id_game5' => 'required',
            'nickname5' => 'required',
        ]);
        try {
            $user['id_cabor'] = 5;
            $user['nama_team'] = $request->nama_team;
            $user['universitas'] = $request->universitas;
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
            $player1['id_game'] = $request->id_game1;
            $player1['nickname'] = $request->nickname1;
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
            $player2['id_game'] = $request->id_game2;
            $player2['nickname'] = $request->nickname2;
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
            $player3['id_game'] = $request->id_game3;
            $player3['nickname'] = $request->nickname3;
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
            $player4['id_game'] = $request->id_game4;
            $player4['nickname'] = $request->nickname4;
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
            $player5['id_game'] = $request->id_game5;
            $player5['nickname'] = $request->nickname5;
            Player::create($player5);

            if($request->nama6){
                $player6['nama'] = $request->nama6;
                $player6['nim']= $request->nim6;
                $player6['id_leader'] = auth()->user()->id;
                $player6['fakultas'] = $request->fakultas6;
                $player6['angkatan'] = $request->angkatan6;
                $player6['link_gdrive'] = $request->link_gdrive6;
                $player6['email'] = $request->email6;
                $player6['hp'] = $request->hp6;
                $player6['gender'] = $request->gender6;
                $player6['id_game'] = $request->id_game6;
                $player6['nickname'] = $request->nickname6;
                Player::create($player6);
            }

            if($request->nama7){
                $player7['nama'] = $request->nama7;
                $player7['nim']= $request->nim7;
                $player7['id_leader'] = auth()->user()->id;
                $player7['fakultas'] = $request->fakultas7;
                $player7['angkatan'] = $request->angkatan7;
                $player7['link_gdrive'] = $request->link_gdrive7;
                $player7['email'] = $request->email7;
                $player7['hp'] = $request->hp7;
                $player7['gender'] = $request->gender7;
                $player7['id_game'] = $request->id_game7;
                $player7['nickname'] = $request->nickname7;
                Player::create($player7);
            }

            if($request->nama8){
                $player8['nama'] = $request->nama8;
                $player8['nim']= $request->nim8;
                $player8['id_leader'] = auth()->user()->id;
                $player8['fakultas'] = $request->fakultas8;
                $player8['angkatan'] = $request->angkatan8;
                $player8['link_gdrive'] = $request->link_gdrive8;
                $player8['email'] = $request->email8;
                $player8['hp'] = $request->hp8;
                $player8['gender'] = $request->gender8;
                $player8['id_game'] = $request->id_game8;
                $player8['nickname'] = $request->nickname8;
                Player::create($player8);
            }

            return redirect()->route("mobilelegends.formulir")->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Data gagal ditambahkan');
        }
    }

        public function formulir()
    {
        $user = auth()->user();
        $anggotas = Player::where('id_leader', $user->id)->get();

        $data = [
            'user' => $user,
            'anggotas' => $anggotas
        ];

        return view('user.formulir', $data);
    }

    public function storeFormulir(Request $request)
    {
        $request->validate([
            'link_team' => 'required|regex:(drive.google.com)',
        ]);
        try {
            $user['link_team'] = $request->link_team;

            User::where('id', auth()->user()->id)->update($user);

            return redirect()->route("dashboard")->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Data gagal ditambahkan');
        }
    }
}
