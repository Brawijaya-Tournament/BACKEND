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
        return view('admin.klasemen.create');
    }

    public function post(Request $request) {
        $simpan = DB::table('klasemens')->insert([
            'nama_univ'=>$request->post('nama_univ'),
            'emas'=>$request->post('emas'),
            'perak'=>$request->post('perak'),
            'perunggu'=>$request->post('perunggu'),
            'ranking'=>$request->post('ranking')
        ]);
        return redirect()->route('admin.klasemen');
    }

    public function delete($id) {
        if ($id == null) {
            return redirect()->route('admin.klasemen');
        }
        try {
            $klasemens = Klasemen::find($id);
            $klasemens->delete();
            return redirect()->route('admin.klasemen')->with('success', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function edit($id) {
        $data['klasemens'] = Klasemen::where('id', $id)->first();
        return view('admin.klasemen.edit', $data);
    }

    public function update(Request $request, $id) {
        $klasemens = Klasemen::find($id);
        $klasemens->nama_univ = $request->input('nama_univ');
        $klasemens->emas = $request->input('emas');
        $klasemens->perak = $request->input('perak');
        $klasemens->perunggu = $request->input('perunggu');
        $klasemens->ranking = $request->input('ranking');
        $klasemens->save();
        return redirect()->route('admin.klasemen');
    }

}