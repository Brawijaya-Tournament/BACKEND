<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\User;

class BulutangkisController extends Controller
{
    public function index()
    {
        return view('user.bulutangkis.index');
    }
    public function createGanda()
    {
        $isRegister = User::where('id', '=', auth()->user()->id)->first();

        if($isRegister->nama_team != null){
            return redirect('/dashboard')->with('message', 'Anda sudah melakukan registrasi!');
        }

        return view('user.bulutangkis.create');
    }

    public function storeGanda(Request $request)
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
            return redirect()->route("dashboard")->with('message', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', 'Data gagal ditambahkan');
        }
    }

    public function createTunggal()
    {
        $isRegister = User::where('id', '=', auth()->user()->id)->first();

        if($isRegister->nama_team != null){
            return redirect('/dashboard')->with('message', 'Anda sudah melakukan registrasi!');
        }

        return view('user.bulutangkis.create');
    }

    public function storeTunggal(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_team' => 'required',
            'universitas' => 'required',
            // 'link_team' => 'required|regex:(drive.google.com)',

            'nama1' => 'required',
            'nim1' => 'required',
            'fakultas1' => 'required',
            'angkatan1' => 'required',
            'link_gdrive1' => 'required|regex:(drive.google.com)',
            'email1' => 'required|email',
            'hp1' => 'required',
            'gender1' => 'required',
        ]);
        // dd($request);
        try {
            $user['id_cabor'] = 1;
            $user['nama_team'] = $request->nama_team;
            $user['universitas'] = $request->universitas;
            // $user['link_team'] = $request->link_team;
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

    public function formulirTunggal()
    {
        $user = auth()->user();
        $anggotas = Player::where('id_leader', $user->id)->get();

        // dd($anggotas);

        $data = [
            'user' => $user,
            'anggotas' => $anggotas
        ];

        return view('user.bulutangkis.formulir', $data);
    }
}
