@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>Tambah Klasemen
                    </h4>
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput">Nama Universitas</label>
                            <input type="judul" name="nama_univ" class="form-control" id="nama_univ" placeholder="Nama Universitas">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput">Emas</label>
                            <input type="text" name="emas" class="form-control" id="emas" placeholder="Emas">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput">Perak</label>
                            <input type="text" name="perak" class="form-control" id="perak" placeholder="Perak">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput">Perunggu</label>
                            <input type="text" name="perunggu" class="form-control" id="perunggu" placeholder="Perunggu">
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
