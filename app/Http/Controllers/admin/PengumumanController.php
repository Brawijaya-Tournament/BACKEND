<?php 

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'isi_preview'=> Str::substr($request->isi, 0, 50),
            'slug'=> Str::slug($request->judul, '-')
        ]);
        return redirect()->route('admin.pengumuman');
    }

    public function read($id) {
        $pengumumans = Pengumuman::find($id);
        return response()->json($pengumumans);
    }

    public function delete($id) {
        if ($id == null) {
            return redirect()->route('admin.pengumuman');
        }
        try {
            $pengumuman = Pengumuman::find($id);
            $pengumuman->delete();
            return redirect()->route('admin.pengumuman')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function edit($id) {
        $data['pengumumans'] = Pengumuman::where('id', $id)->first();
        return view('admin.pengumuman.edit', $data);
    }

    public function update(Request $request, $id) {
        $pengumumans = Pengumuman::find($id);
        $pengumumans->judul = $request->input('judul');
        $pengumumans->isi = $request->input('isi');
        $pengumumans->slug = Str::slug($pengumumans->judul, '-');
        $pengumumans->isi_preview = Str::substr($pengumumans->isi, 0, 50);
        $pengumumans->save();
        return redirect()->route('admin.pengumuman');
    }
}