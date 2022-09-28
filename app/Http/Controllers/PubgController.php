<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;

class PubgController extends Controller
{
    public function index()
    {
        return view('user.pubg.index');
    }
    
    public function create()
    {
        $isRegister = User::where('id', '=', auth()->user()->id)->first();

        if($isRegister->nama_team != null){
            return redirect('/dashboard')->with('message', 'Anda sudah melakukan registrasi!');
        }

        return view('user.pubg.create');
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

            // 'nama3' => 'required',
            // 'nim3' => 'required',
            // 'fakultas3' => 'required',
            // 'angkatan3' => 'required',
            // 'link_gdrive3' => 'required|regex:(drive.google.com)',
            // 'email3' => 'required|email',
            // 'hp3' => 'required',
            // 'gender3' => 'required',
            // 'id_game3' => 'required',
            // 'nickname3' => 'required',

            // 'nama4' => 'required',
            // 'nim4' => 'required',
            // 'fakultas4' => 'required',
            // 'angkatan4' => 'required',
            // 'link_gdrive4' => 'required|regex:(drive.google.com)',
            // 'email4' => 'required|email',
            // 'hp4' => 'required',
            // 'gender4' => 'required',
            // 'id_game4' => 'required',
            // 'nickname4' => 'required',

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

            // $player3['nama'] = $request->nama3;
            // $player3['nim']= $request->nim3;
            // $player3['id_leader'] = auth()->user()->id;
            // $player3['fakultas'] = $request->fakultas3;
            // $player3['angkatan'] = $request->angkatan3;
            // $player3['link_gdrive'] = $request->link_gdrive3;
            // $player3['email'] = $request->email3;
            // $player3['hp'] = $request->hp3;
            // $player3['gender'] = $request->gender3;
            // $player3['id_game'] = $request->id_game3;
            // $player3['nickname'] = $request->nickname3;
            // Player::create($player3);

            // $player4['nama'] = $request->nama4;
            // $player4['nim']= $request->nim4;
            // $player4['id_leader'] = auth()->user()->id;
            // $player4['fakultas'] = $request->fakultas4;
            // $player4['angkatan'] = $request->angkatan4;
            // $player4['link_gdrive'] = $request->link_gdrive4;
            // $player4['email'] = $request->email4;
            // $player4['hp'] = $request->hp4;
            // $player4['gender'] = $request->gender4;
            // $player4['id_game'] = $request->id_game4;
            // $player4['nickname'] = $request->nickname4;
            // Player::create($player4);

            return redirect()->route("pubg.formulir")->with('message', 'Data berhasil ditambahkan');
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
