<?php 

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Klasemen;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KlasemenController extends Controller {
    public function index() {
        $klasemens=Klasemen::all();
        return view('admin.klasemen.index', ['klasemens'=>$klasemens]);
    }

    public function create(Request $request) {
        $simpan = DB::table('klasemens')->insert([
            'nama_univ'=>$request->post('nama_univ'),
            'emas'=>$request->post('emas'),
            'perak'=>$request->post('perak'),
            'perunggu'=>$request->post('perunggu')
        ]);

        return redirect()->route('admin.klasemen');
    }

    public function delete($id) {
        $mahasiswa = Klasemen::find($id);
        $mahasiswa->delete();
        return redirect()->route('admin.klasemen')->with('success', 'Data berhasil dihapus');
    }

    public function edit($id) {
        $klasemen = Klasemen::find($id);
    }

    // public function datatables(Request $request)
    // {
    //     $klasemens=Klasemen::all();
    //     return DataTables::of($klasemens);
    //     // return DataTables::of($users)
    //     //     ->addColumn('action', function ($users) {
    //     //         $detailButton = '<a href="/adminbt/team/detail/' . $users->id . '" class="btn btn-xs btn-primary"><i class="mdi mdi-account-edit"></i> Detail</a>';
    //     //         $deleteButton = '<a href="/adminbt/team/delete/' . $users->id . '" class="btn btn-xs btn-danger" onclick="return myFunction()"><i class="mdi mdi-delete"></i> Delete</a>';
    //     //         return '<div class="">' . $detailButton . '  ' . $deleteButton . '</div>';
    //     //     })
    //     //     ->editColumn('created_at', function ($users) {
    //     //         return $users->created_at;
    //     //         // return Carbon::parse($users->created_at)->isoFormat('LLL');
    //     //     })
    //     //     ->editColumn('updated_at', function ($users) {
    //     //         return $users->updated_at;
    //     //         // return Carbon::parse($users->updated_at)->isoFormat('LLL');
    //     //     })
    //     //     ->removeColumn('id')->make(true);
    // }

}