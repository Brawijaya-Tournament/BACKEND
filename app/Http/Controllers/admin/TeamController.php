<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Player;
use App\Models\User;

class TeamController extends Controller
{
    //
    public function index()
    {
        return view('admin.team.index');
    }
    public function detail(User $user)
    {
        $team = User::where('id', '=', $user->id)->first();
        $players = Player::where('id_leader', '=', $user->id)->get();
        $jumlah = Player::where('id_leader','=', $user->id)->count();
        return view('admin.team.detail', [
            "team" => $team,
            "players" => $players,
            "jumlah"=> $jumlah,
        ]);
    }
    public function delete($id = null)
    {
        if ($id == null) {
            return redirect()->route('admin.mahasiswa');
        }
        try {
            $mahasiswa = Player::find($id);
            $mahasiswa->delete();
            return redirect()->route('admin.mahasiswa')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }
    public function datatables(Request $request)
    {
        $users = User::join('cabors', 'users.id_cabor', '=', 'cabors.id')->select('users.id', 'users.nama_team', 'users.universitas', 'users.created_at', 'users.updated_at', 'cabors.nama');
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                $detailButton = '<a href="/adminbt/team/detail/' . $users->id . '" class="btn btn-xs btn-primary"><i class="mdi mdi-account-edit"></i> Detail</a>';
                $deleteButton = '<a href="/adminbt/team/delete/' . $users->id . '" class="btn btn-xs btn-danger" onclick="return myFunction()"><i class="mdi mdi-delete"></i> Delete</a>';
                return '<div class="">' . $detailButton . '  ' . $deleteButton . '</div>';
            })
            ->editColumn('created_at', function ($users) {
                return $users->created_at;
                // return Carbon::parse($users->created_at)->isoFormat('LLL');
            })
            ->editColumn('updated_at', function ($users) {
                return $users->updated_at;
                // return Carbon::parse($users->updated_at)->isoFormat('LLL');
            })
            ->removeColumn('id')->make(true);
    }
}
