<?php 

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller {
    public function index() {
        $pengumumans=Pengumuman::all();
        return view('admin.pengumuman.index', ['pengumumans'=>$pengumumans]);
    }

    public function create() {
        return view('admin.pengumuman.create');
    }

    public function post(Request $request) {
        $simpan = DB::table('pengumumans')->insert([
            'judul'=>$request->post('judul'),
            'isi'=>$request->post('isi'),
        ]);

        return redirect()->route('admin.pengumuman');
    }

    public function delete($id) {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        return redirect()->route('admin.pengumuman'); 
    }

    public function edit() {
        return view('admin.pengumuman.edit');
    }

    public function update() {

    }
}