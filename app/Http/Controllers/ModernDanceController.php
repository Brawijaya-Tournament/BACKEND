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

        return view('user.moderndance.create');
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

            'nama2' => 'required',
            'nim2' => 'required',
            'fakultas2' => 'required',
            'angkatan2' => 'required',
            'link_gdrive2' => 'required|regex:(drive.google.com)',
            'email2' => 'required|email',
            'hp2' => 'required',
            'gender2' => 'required',

            'nama3' => 'required',
            'nim3' => 'required',
            'fakultas3' => 'required',
            'angkatan3' => 'required',
            'link_gdrive3' => 'required|regex:(drive.google.com)',
            'email3' => 'required|email',
            'hp3' => 'required',
            'gender3' => 'required',

        ]);
        try {
            $user['id_cabor'] = 8;
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

            if($request->nama4){
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
            }

            if($request->nama5){
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
            }

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
                Player::create($player8);
            }

            if($request->nama9){
                $player9['nama'] = $request->nama9;
                $player9['nim']= $request->nim9;
                $player9['id_leader'] = auth()->user()->id;
                $player9['fakultas'] = $request->fakultas9;
                $player9['angkatan'] = $request->angkatan9;
                $player9['link_gdrive'] = $request->link_gdrive9;
                $player9['email'] = $request->email9;
                $player9['hp'] = $request->hp9;
                $player9['gender'] = $request->gender9;
                Player::create($player9);
            }

            if($request->nama10){
                $player10['nama'] = $request->nama10;
                $player10['nim']= $request->nim10;
                $player10['id_leader'] = auth()->user()->id;
                $player10['fakultas'] = $request->fakultas10;
                $player10['angkatan'] = $request->angkatan10;
                $player10['link_gdrive'] = $request->link_gdrive10;
                $player10['email'] = $request->email10;
                $player10['hp'] = $request->hp10;
                $player10['gender'] = $request->gender10;
                Player::create($player10);
            }

            if($request->nama11){
                $player11['nama'] = $request->nama11;
                $player11['nim']= $request->nim11;
                $player11['id_leader'] = auth()->user()->id;
                $player11['fakultas'] = $request->fakultas11;
                $player11['angkatan'] = $request->angkatan11;
                $player11['link_gdrive'] = $request->link_gdrive11;
                $player11['email'] = $request->email11;
                $player11['hp'] = $request->hp11;
                $player11['gender'] = $request->gender11;
                Player::create($player11);
            }

            if($request->nama12){
                $player12['nama'] = $request->nama12;
                $player12['nim']= $request->nim12;
                $player12['id_leader'] = auth()->user()->id;
                $player12['fakultas'] = $request->fakultas12;
                $player12['angkatan'] = $request->angkatan12;
                $player12['link_gdrive'] = $request->link_gdrive12;
                $player12['email'] = $request->email12;
                $player12['hp'] = $request->hp12;
                $player12['gender'] = $request->gender12;
                Player::create($player12);
            }
            return redirect()->route("dashboard")->with('message', 'Data berhasil ditambahkan');
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
