@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>Pengumuman
                    </h4>
                    <h6 class="card-subtitle">
                        Daftar Pengumuman
                    </h6>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Dibuat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $number = 1; ?>
                                @if (isset($pengumumans))
                                @foreach ($pengumumans as $pengumumans)
                                <tr>
                                    <td> {{ $number++ }} </td>
                                    <td>{{ $pengumumans->judul }}</td>
                                    <td>{{ $pengumumans->isi }}</td>
                                    <td>{{ $pengumumans->created_at }}</td>
                                    <td><a href="{{ url("adminbt/pengumuman/edit/$pengumumans->id") }}" id="edit" class="btn btn-xs btn-primary" ><i class="mdi mdi-pencil"></i> Edit</a>
                                        <a href="{{ url("adminbt/pengumuman/delete/$pengumumans->id") }}" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?');"><i class="mdi mdi-delete"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
@endsection
