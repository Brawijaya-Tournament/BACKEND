@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Pengumuman</h4>
                    <form method="POST" action= "{{ url("adminbt/pengumuman/update/$pengumumans->id") }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleFormControlInput">Judul</label>
                            <input type="judul" name="judul" class="form-control" id="judul" placeholder="Judul" value="{{ $pengumumans->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea">Isi</label>
                            <textarea class="form-control" name="isi" id="isi" rows="10">{{ $pengumumans->isi }}</textarea>
                        </div>
                        <button type="submit" name = "simpan" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
@endsection
